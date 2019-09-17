@extends('layouts.app')

@section('content')
<div class="container">
<div class="row ">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>Cargar Productos</strong></h5>
        <p class="card-text">Acá podras crear los productos .</p>
        <a href="{{url('/cargar')}}" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>Listado Productos</strong></h5>
        <p class="card-text">Acá podrás ver los productos y modificarlos.</p>
        <a href="{{url('/listado')}}" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>

</div>
</div>
@endsection
