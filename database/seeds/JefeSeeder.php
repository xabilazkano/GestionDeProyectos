<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class JefeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i =1;$i<4;$i++){
        	Departamento::where('id',$i)->update(['jefe_id'=>$i]);
        }
    }
}
