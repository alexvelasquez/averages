@extends('layouts.app')

@section('content')
<div class="container">
<div class="row ">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>Seccion de Productos</strong></h5>
        <p class="card-text">Acá podrás administrar los productos.</p>
        <a href="{{url('/productos')}}" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>Seccion de Calculos y promedios</strong></h5>
        <p class="card-text">Acá podrás calcular y ver los balances.</p>
        <a href="{{url('/calculos')}}" class="btn btn-primary">Entrar</a>
      </div>
    </div>
  </div>

</div>
</div>
@endsection
