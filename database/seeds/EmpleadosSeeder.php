<?php

use Illuminate\Database\Seeder;
use App\Empleado;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Empleado::class,10)->create();
        /*
        Empleado::insert([
        	'nombre' => 'Xabi',
        	'apellido' => 'Lazkano',
        	'email' => 'xabi@gmail.com',
        	'telefono' => '666666666',
            'departamento_id' => 1
        ]);

        Empleado::insert([
        	'nombre' => 'Eneko',
        	'apellido' => 'Bakaikoa',
        	'email' => 'eneko@gmail.com',
        	'telefono' => '666666667',
            'departamento_id' => 1
        ]);

        Empleado::insert([
        	'nombre' => 'Peru',
        	'apellido' => 'Altuna',
        	'email' => 'peru@gmail.com',
        	'telefono' => '666666668',
            'departamento_id' => 1
        ]);

        Empleado::insert([
            'nombre' => 'Iñigo',
            'apellido' => 'Perez',
            'email' => 'iñigo@gmail.com',
            'telefono' => '666666669',
            'departamento_id' => 2
        ]);

        Empleado::insert([
            'nombre' => 'LeBron',
            'apellido' => 'James',
            'email' => 'lebron@gmail.com',
            'telefono' => '666666661',
            'departamento_id' => 2
        ]);

        Empleado::insert([
            'nombre' => 'Jokin',
            'apellido' => 'Altuna',
            'email' => 'jokin@gmail.com',
            'telefono' => '666666662',
            'departamento_id' => 2
        ]);

        Empleado::insert([
            'nombre' => 'Joseba',
            'apellido' => 'Ezkurdia',
            'email' => 'joseba@gmail.com',
            'telefono' => '666666663',
            'departamento_id' => 3
        ]);

        Empleado::insert([
            'nombre' => 'Erik',
            'apellido' => 'Jaka',
            'email' => 'erik@gmail.com',
            'telefono' => '666666664',
            'departamento_id' => 3
        ]);

        Empleado::insert([
            'nombre' => 'Unai',
            'apellido' => 'Laso',
            'email' => 'unai@gmail.com',
            'telefono' => '666666665',
            'departamento_id' => 3
        ]);

        Empleado::insert([
            'nombre' => 'Pello',
            'apellido' => 'Etxeberria',
            'email' => 'pello@gmail.com',
            'telefono' => '966666666',
            'departamento_id' => 1
        ]);*/
    }
}
