<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function (Blueprint $table) {
            $table->id();
            $table->string('CodigoVendedor')->unique();
            $table->string('NombreVendedor');
            $table->string('ApellidoVendedor');
            $table->integer('Telefono')->unique();
            $table->string('DNIVendedor')->unique();
            $table->integer('Sueldo');
            $table->integer('Edad');
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
        Schema::dropIfExists('vendedors');
    }
}