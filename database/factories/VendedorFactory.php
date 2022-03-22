<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vendedor;

class VendedorFactory extends Factory

{
    /**
     * Define the model's default state.
     *$table->string('CodigoVendedor')->unique();
           
     * @return array
     */
    /**$table->string('CodigoVendedor')->unique();
            $table->string('NombreVendedor');
            $table->string('ApellidoVendedor');
            $table->integer('Telefono')->unique();
            $table->string('DNIVendedor')->unique();
            $table->integer('Sueldo');
            $table->integer('Edad');
                                         */
    public function definition()
    {
        return [
            'CodigoVendedor'=>$this-> faker-> numerify('#######'),
            'NombreVendedor'=>$this->faker->name,
            'ApellidoVendedor'=>$this->faker-> lastName,
            'Telefono'=>$this->faker->numerify('########'),
            'DNIVendedor'=>$this->faker->ean13,
            'Sueldo'=>$this->faker->numberBetween(8000,10000),
            'Edad'=>$this->faker->numberBetween(18,50)

        ];
    }
}
