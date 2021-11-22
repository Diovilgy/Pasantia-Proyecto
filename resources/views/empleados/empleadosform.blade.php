@extends('layouts.base')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <div class="card">
                <form action="" method="post">
                    
                    <div class="card-header text-center">AGREGAR EMPLEADO</div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Cedula</label>
                            <input type="text" name="cedula" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Apellido</label>
                            <input type="text" name="apellido" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Telefono</label>
                            <input type="text" name="telefono" class="form-control col-md-9">
                        </div>      

                        <div class="row form-group">
                            <label for="" class="col-2">Email</label>
                            <input type="text" name="email" class="form-control col-md-9">
                        </div>            
                        
                        <<!-- div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-3 offset-2">Guardar</button>

                            <button type="button" class="btn btn-success col-md-3 offset-2">Cancelar</button>
                        </div> -->


                    </div>
                </form>
            </div>

        </div>

    </div>
</div>