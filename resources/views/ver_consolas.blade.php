@extends('layouts.master')
@section('title')
LaravelConsoles - verConsolas
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-board table-bordered table-striped table-responsive">
                <thead class="text-light bg-dark bg-gradient">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Año de lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola"></tbody>
            </table>
        </div>
    </div>
    
@endsection