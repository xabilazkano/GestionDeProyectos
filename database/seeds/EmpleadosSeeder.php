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
        Empleado::insert([
        	'nombre' => 'Xabi',
        	'apellido' => 'Lazkano',
        	'email' => 'xabi@gmail.com',
        	'telefono' => '666666666'
        ]);

        Empleado::insert([
        	'nombre' => 'Eneko',
        	'apellido' => 'Bakaikoa',
        	'email' => 'eneko@gmail.com',
        	'telefono' => '666666667'
        ]);

        Empleado::insert([
        	'nombre' => 'Peru',
        	'apellido' => 'Altuna',
        	'email' => 'peru@gmail.com',
        	'telefono' => '666666668'
        ]);

        Empleado::insert([
            'nombre' => 'Iñigo',
            'apellido' => 'Perez',
            'email' => 'iñigo@gmail.com',
            'telefono' => '666666669'
        ]);

        Empleado::insert([
            'nombre' => 'LeBron',
            'apellido' => 'James',
            'email' => 'lebron@gmail.com',
            'telefono' => '666666661'
        ]);

        Empleado::insert([
            'nombre' => 'Jokin',
            'apellido' => 'Altuna',
            'email' => 'jokin@gmail.com',
            'telefono' => '666666662'
        ]);

        Empleado::insert([
            'nombre' => 'Joseba',
            'apellido' => 'Ezkurdia',
            'email' => 'joseba@gmail.com',
            'telefono' => '666666663'
        ]);

        Empleado::insert([
            'nombre' => 'Erik',
            'apellido' => 'Jaka',
            'email' => 'erik@gmail.com',
            'telefono' => '666666664'
        ]);

        Empleado::insert([
            'nombre' => 'Unai',
            'apellido' => 'Laso',
            'email' => 'unai@gmail.com',
            'telefono' => '666666665'
        ]);

        Empleado::insert([
            'nombre' => 'Pello',
            'apellido' => 'Etxeberria',
            'email' => 'pello@gmail.com',
            'telefono' => '966666666'
        ]);
    }
}
