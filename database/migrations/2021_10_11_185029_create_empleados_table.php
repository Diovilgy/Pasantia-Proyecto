<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('idEmpleado');
            $table->string('cedula',8)->unique();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('telefono',20);
            $table->string('email',60)->unique();
            $table->timestamps();

            $table->foreign('idEmpleado')->references('idArea')->on('area');
            $table->foreign('idEmpleado')->references('idOrden')->on('orden');
            $table->foreign('idEmpleado')->references('idUsuario')->on('usuario');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
