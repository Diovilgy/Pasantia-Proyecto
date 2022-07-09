@extends ('layouts.base')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <h2 class="text-center mb-5">Empleados</h2>

            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($empleados as $empledo)
                        <tr>
                            <th>{{ $empledo->cedula }}</th>
                            <th>{{ $empledo->nombre }}</th>
                            <th>{{ $empledo->apellido }}</th>
                            <th>{{ $empledo->telefono }}</th>
                            <th>{{ $empledo->email }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>