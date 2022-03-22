<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CodigoCliente'=>$this->faker->numerify('#######'),
            'NombreCliente'=>$this->faker->name,
            'ApellidoCliente'=>$this->faker->lastName,
            'telefono'=>$this->faker->numerify('########'),
            'DNICliente'=>$this->faker->ean13,
            'DireccionCliente'=>$this->faker->address,
            'FormaDePago'=>$this->faker->numberBetween(1,2)


        ];
    }
}
