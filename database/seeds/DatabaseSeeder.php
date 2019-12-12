<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call('DepartamentosSeeder');
    	$this->call('EmpleadosSeeder');
    	$this->call('ProyectosSeeder');
    	$this->call('EmpleadoProyectoSeeder');
    	$this->call('JefeSeeder');
    }
}
