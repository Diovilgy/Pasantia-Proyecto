<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //Crear Empleados
    protected $empleados= ['cedula','nombre','apellido','telefono','email'];
}
