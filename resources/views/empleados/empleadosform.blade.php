@extends('layouts.base')
  

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <div class="card">
                <form action="" method="post">
                    
                    <div class="card-header text-center">AGREGAR EMPLEADO</div>

                    <div class="card-body">
                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Cedula</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="cedula" class="form-control">
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Nombre</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="nombre" class="form-control">
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Apellido</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="apellido" class="form-control">
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Telefono</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="telefono" class="form-control">
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="email" class="form-control">
                            </div>  
                        </div>          
                        
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-3 offset-2">Guardar</button>

                            <button type="button" class="btn btn-success col-md-3 offset-2">Cancelar</button>
                        </div> 

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>