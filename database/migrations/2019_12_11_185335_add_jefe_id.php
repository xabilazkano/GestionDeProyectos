<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddJefeId extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
    Schema::table('departamentos', function (Blueprint $table) {
        $table->unsignedBigInteger('jefe_id')->nullable();
        $table->foreign('jefe_id')->references('id')->on('empleados');
    });
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
//
}
}