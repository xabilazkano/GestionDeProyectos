<?php
use Illuminate\Database\Seeder;
class EmpleadoProyectoSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    factory(App\EmpleadoProyecto::class,15)->create();
    /*$fecha = date('Y/m/d');
    for ($i=0;$i<15;$i++) {
        $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $fechainicio = date ( 'Y/m/d' , $fechainicio);
        $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $fechafin = date ( 'Y/m/d' , $fechafin );
        DB::table('empleado_proyecto')->insert([
            'empleado_id' => rand(1,10),
            'proyecto_id' => rand(1,5),
            'fechainicio' => $fechainicio,
            'fechafin' => $fechafin
        ]);*/
    }
}