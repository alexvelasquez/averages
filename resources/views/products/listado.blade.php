@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>{{ __('Listado de Productos') }}</h4></div>
                <div class="card-body">
                <ul class="list-group">

                <li class="list-group-item d-flex justify-content-between align-items-center" style="border:none !important">
                    <div class="col-md-12">
                        <select class="custom-select " id="inputGroupSelect01">
                                    <option selected disabled>Elegir...</option>
                                    <option value="1">Carne</option>
                                    <option value="2">Pollo</option>
                                    <option value="3">Cerdo</option>
                        </select>
                    </div>
                 </li>
                 </ul>
                 </div>
                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h5><strong>Paleta</strong></h5>
                    <div class="col-md-2 offset-md-6">
                    <input id="price_edit" type="text" class="form-control" name="price_edit" value="235,00" required autofocus>
                    </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h5><strong>Roast Beef</strong></h5>
                    <div class="col-md-2 offset-md-6">
                    <input id="price_edit" type="text" class="form-control" name="price_edit" value="220,00" required autofocus>
                    </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h5><strong>Cuadrada</strong></h5>
                    <div class="col-md-2 offset-md-6">
                    <input id="price_edit" type="text" class="form-control" name="price_edit" value="230,00" required autofocus>
                    </div>
                    </li>
                </ul>                
                </div>
                <div class="row">
                <div class="col-md-6 offset-md-5">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Aceptar') }}
                        </button>
                </div>
                </div>
            </div>
            <div class="col-md-2 offset-md-10">
                <a href="{{url('/productos')}}" class="btn btn-danger">
                    {{ __('volver') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
