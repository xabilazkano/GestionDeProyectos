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

        factory(App\Departamento::class,3)->create();

        /*Departamento::insert([
        	'nombre' => 'Informatica'
        ]);

        Departamento::insert([
        	'nombre' => 'Marketing'
        ]);

        Departamento::insert([
        	'nombre' => 'Contabilidad'
        ]);*/
    }
}
