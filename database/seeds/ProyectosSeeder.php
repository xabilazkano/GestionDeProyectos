<?php
use Illuminate\Database\Seeder;
use App\Proyecto;
class ProyectosSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    $fecha = date('Y/m/d');
    for ($i=0;$i<20;$i++) {
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );

        Proyecto::insert([
            'nombre' => 'Xabi',
            'titulo' => 'Ro-Botika',
            'fechainicio' => $fechainicio,
            'fechafin'  => $fechafin,
            'horasestimadas' => rand(500,3000)
        ]);
        Proyecto::insert([
            'nombre' => 'Eneko',
            'titulo' => 'Garbera',
            'fechainicio' => $fechainicio,
            'fechafin'  => $fechafin,
            'horasestimadas' => rand(500,3000)
        ]);
        Proyecto::insert([
            'nombre' => 'Peru',
            'titulo' => 'Azkena',
            'fechainicio' => $fechainicio,
            'fechafin'  => $fechafin,
            'horasestimadas' => rand(500,3000)
        ]);

        Proyecto::insert([
            'nombre' => 'Pello',
            'titulo' => 'Proyecto4',
            'fechainicio' => $fechainicio,
            'fechafin'  => $fechafin,
            'horasestimadas' => rand(500,3000)
        ]);

        Proyecto::insert([
            'nombre' => 'Joseba',
            'titulo' => 'Proyecto5',
            'fechainicio' => $fechainicio,
            'fechafin'  => $fechafin,
            'horasestimadas' => rand(500,3000)
        ]);
    }
}
}