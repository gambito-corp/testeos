<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'nombre'    => 'Banco de Credito del Peru',
            'siglas'    => 'BCP'
        ]);
        Bank::create([
            'nombre'    => 'Banco BBVA Continental',
            'siglas'    => 'BBVA'
        ]);
        Bank::create([
            'nombre'    => 'Interbank',
            'siglas'    => 'Interbank'
        ]);
        Bank::create([
            'nombre'    => 'ScotiaBank',
            'siglas'    => 'ScotiaBank'
        ]);
        Bank::create([
            'nombre'    => 'Banco Nacional del Peru',
            'siglas'    => 'BNP'
        ]);
    }
}
