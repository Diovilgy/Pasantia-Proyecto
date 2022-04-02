@extends('layouts.base')
  


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

        <!-- Validación de errores -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach

            </ul>
        </div>
        @endif

            <div class="card">
                <form action="{{ route('store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                    <div class="card-header text-center">AGREGAR EMPLEADO</div>
                    <div class="card-body">
                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="cedula" class="col-form-label">Cedula</label>
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="cedula" id="cedula" class="form-control" value="" require> 
                            </div> 
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Nombre</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="nombre" id="nombre" class="form-control" value=""  require>          
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Apellido</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="apellido" id="apellido" class="form-control" value="" require>               
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Telefono</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="telefono" id="telefono" class="form-control" value="" require>              
                            </div>  
                        </div>

                        <div class="row g-3 form-group justify-content-md-center">
                            <div class="col-md-2">
                                <label for="" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-4">
                                <input type="email" name="email" id="email" class="form-control" 
                                placeholder="nombre@ejemplo.com"  value="" require>
                            </div>  
                        </div>       
                        
                        <div class="row form-group">
                            <button type="submit" value="submit" class="btn btn-primary col-md-3 offset-2">Guardar</button> 
                               
                            <button type="button" class="btn btn-primary col-md-3 offset-2">Cancelar</button>
                        </div> 

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>