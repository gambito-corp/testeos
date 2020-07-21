<?php

namespace App\Http\Livewire\Index;

use App\Lot;
use App\Company;
use App\Producto;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Resultados extends Component
{
    public $usuarios;
    public $resultado;
    public $buscar;
    public $empresas;
    public $picked;

    protected $listeners = ['buscarEmpresas', 'selecionEmpresa', 'Precio'];
    /**
     * @var Lot[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $lotes;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $productos;
    /**
     * @var mixed
     */
    public $vehiculos;
    /**
     * @var mixed
     */
    public $precioMin;
    /**
     * @var mixed
     */
    public $precioMax;
    /**
     * @var bool|mixed
     */
    public $mount;
    /**
     * @var mixed
     */
    public $ciudad;
    /**
     * @var mixed
     */
    public $tipoV;
    /**
     * @var mixed
     */
    public $tipoR;


    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->picked = true;
        $this->empresas = $empresas;
        $this->mount = 1;
        $this->precioMin = 0;
        $this->precioMax = 1000000;
    }

    public function buscarEmpresas()
    {
        if(Cache::has('buscar')){$this->buscar = Cache::get('buscar');}
        if(Cache::has('Min')){$this->precioMin = Cache::get('Min');}
        if(Cache::has('Max')){$this->precioMax = Cache::get('Max');}
        if(Cache::has('ciudad')){$this->ciudad = Cache::get('ciudad');}
        if(Cache::has('tipoV')){$this->tipoV = Cache::get('tipoV');}
        if(Cache::has('tipoR')){$this->tipoR = Cache::get('tipoR');}
        $this->picked = false;
        $productosClosure = function ($query)
        {
            $query->when(!empty($this->ciudad), function ($query)
            {
                $query->where("ciudad", $this->ciudad);
            })
                ->when(!empty($this->tipoV), function ($query)
                {
                    $query->where('tipo_vehiculo', $this->tipoV);
                })
                ->when(!empty($this->tipoR),function ($query)
                {
                    $query->where('tipo_reserva', $this->tipoR);
                })
                ->whereBetween("precio", [intval($this->precioMin), intval($this->precioMax)])
                ->with('Lote');
        };

        $lotesClosure = function ($query) use ($productosClosure)
        {
            $query->whereHas('Productos', $productosClosure)->with([
                'Productos' => $productosClosure
            ]);
        };

        $this->empresas = Company::whereHas('Productos', $productosClosure)
            ->with(['Productos' => $productosClosure])
            ->when(!empty($this->buscar), function ($query)
            {
                $query->where('nombre', 'like', "%".trim($this->buscar) . "%")
                    ->orWhere('razon_social', 'like', "%".trim($this->buscar) . "%");
            })
            ->whereHas('Lotes', $lotesClosure)->with(['Lotes' => $lotesClosure])
            ->get();
    }

    public function selecionEmpresa($buscar)
    {
        $this->buscar = $buscar;
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->get();
    }
    public function render()
    {
        return view('livewire.index.resultados');
    }
}
