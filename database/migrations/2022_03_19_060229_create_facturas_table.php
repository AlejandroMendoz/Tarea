<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('NumeroFactura')->unique();
            $table->date('FechaDeEmision');
            $table->integer('Telefono');
            $table->string('FormaDePago');
            $table->integer('CodigoProducto');
            $table->integer('Cantidad');
            $table->string('Producto');
            $table->integer('PrecioTotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
