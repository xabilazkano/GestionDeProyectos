<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::insert([
        	'nombre' => 'Informatica'
        ]);

        Departamento::insert([
        	'nombre' => 'Marketing'
        ]);

        Departamento::insert([
        	'nombre' => 'Contabilidad'
        ]);
    }
}
