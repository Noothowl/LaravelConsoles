@extends('layouts.master')
@section('title')
LaravelConsoles - registrarConsola
@endsection

@section('content')
<div class="mt-5 row">
  <div class="col-12 col-md-8 col-lg-5 mx-auto"> <!--mx-auto to auto center columns -->
      <div class="card">
          <div class="card-header bg-transparent">
              <span>Agregar consola</span>
          </div>
          <div class="card-body">
              <div class="mb-3">
                  <label for="name-txt">Nombre</label>
                  <input type="text" id=name-txt class="form-control">
              </div>
              <div class="mb-3">
                  <label for="brand-select" class="form-label">Marca</label>
                  <select id="brand-select" class="form-select">
                      <option value="Microsoft">Microsoft</option>
                      <option value="Sony">Sony</option>
                      <option value="Nintendo">Nintendo</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for="year-txt">Año de lanzamiento</label>
                  <input type="number" class="form-control" id=year-txt> <!-- This is for number inputs-->
              </div>
          </div>
          <div class="card-footer d-grid gap-1">
              <button type="button" class="btn btn-outline-primary">Registrar</button>
          </div>
      </div>
  </div>
</div>
@endsection