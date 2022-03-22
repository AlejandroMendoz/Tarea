<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendedor;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call([
        VendedorSeeder::class,
        ClienteSeeder::class,
        FacturaSeeder::class,
        ProductoSeeder::class
    ]);
    }
}
