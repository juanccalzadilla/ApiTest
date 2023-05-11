<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'nombre' => 'Ferreteria Manolito',
            'direccion' => 'Calle la princesa de asturias 12',
            'tipo' => 'proveedor',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('proveedores')->insert([
            'nombre' => 'IONOS 1&1',
            'direccion' => 'Calle Anderson Marquez 12',
            'tipo' => 'acreedor',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('proveedores')->insert([
            'nombre' => 'Caniceria El Cairo',
            'direccion' => 'Calle Mangos 12',
            'tipo' => 'proveedores',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('proveedores')->insert([
            'nombre' => 'El bar de pepe',
            'direccion' => 'Casa de Lopez Marin con Esquina 12',
            'tipo' => 'proveedor',
            'activo' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);




    }
}
