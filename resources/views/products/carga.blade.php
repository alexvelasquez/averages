@extends('layouts.app')

@section('content')
<div class="container">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Agregaste el producto correctamente!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Producto') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/alta_producto') }}">
                        <div class="form-group row">
                        <label for="seccion_name" class="col-md-4 col-form-label text-md-right">{{ __('Sección') }}</label>
                        <div class="col-md-6">
                        <select class="custom-select " id="inputGroupSelect01">
                            <option selected disabled>Elegir...</option>
                            <option value="1">Carne</option>
                            <option value="2">Pollo</option>
                            <option value="3">Cerdo</option>
                          </select>
                        </div>

                        </div>

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" step="0.01" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar') }}
                                </button>
                            </div>
                            <div class="col-md-2 offset-md-10">
                                <a href="{{url('/productos')}}" class="btn btn-danger">
                                    {{ __('volver') }}
                                </a>
        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
