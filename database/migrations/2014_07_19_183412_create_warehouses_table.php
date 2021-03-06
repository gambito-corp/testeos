<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWarehousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warehouses', function(Blueprint $table)
		{
			$table->id();
			$table->foreignId('empresa_id')->nullable()->constrained('companies')->onDelete('set null');
			$table->foreignId('direccion_id')->nullable()->constrained('addresses')->onDelete('set null');
			$table->string('turnos_visita')->nullable();
			$table->string('telefono')->nullable();
			$table->text('informacion', 65535)->nullable();
			$table->string('max_personas')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('warehouses');
	}

}
