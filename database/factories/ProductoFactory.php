<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CodigoProducto'=>$this->faker->unique->numberBetween(1,10000),
            'Producto'=>$this->faker->text,
            'DescripcionProducto'=>$this->faker->text,
            'Marca'=>$this->faker->text,
            'Categoria'=>$this->faker->text,
            'PrecioDeVenta'=>$this->faker->numberBetween(100,1000)
        ];
    }
}
