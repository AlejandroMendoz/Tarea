<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Factura;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NumeroFactura'=>$this->faker->unique->numerify('######'),
            'FechaDeEmision'=>$this->faker->date('1999-01-01', 'now'),
            'Telefono'=>$this->faker->numerify('########'),
            'FormaDePago'=>$this->faker->numberBetween(1,3),
            'CodigoProducto'=>$this->faker->numberBetween(99,10000),
            'Cantidad'=>$this->faker->numberBetween(1,100),
            'Producto'=>$this->faker->text,
            'PrecioTotal'=>$this->faker->numberBetween(100,10000)
        ];
    }
}
