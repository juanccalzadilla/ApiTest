<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Juan',
            'apellidos' => 'Perez',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'Maria',
            'apellidos' => 'Gomez',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'Pedro',
            'apellidos' => 'Garcia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'Luis',
            'apellidos' => 'Gonzalez',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'Ana',
            'apellidos' => 'Fernandez',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'Sara',
            'apellidos' => 'Lopez',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
