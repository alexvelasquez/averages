@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Promedios</a>
  </li>
  <li class="breadcrumb-item active">Calculos</li>
</ol>

<!-- Icon Cards-->
<div class="row">

<div class="col-xl-4 col-sm-6 mb-4">
    <div class="card text-white o-hidden h-100" style="background-color:#8E9AD6">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-life-ring"></i>
        </div>
        <div class="mr-5"></div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <h5><span class="float-left">Carne</span></h5>
      </a>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 mb-4">
    <div class="card text-white o-hidden h-100" style="background-color:#8E9AD6">
      <div class="card-body">
        <div class="card-body-icon">
        <i class="fas fa-fw fa-piggy-bank"></i>
        </div>
        <div class="mr-5"></div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <h5><span class="float-left">Cerdo</span></h5>
      </a>
    </div>
  </div>

  <div class="col-xl-4 col-sm-12 mb-4">
    <div class="card text-white o-hidden h-100" style="background-color:#8E9AD6">
      <div class="card-body">
        <div class="card-body-icon">
        <i class="fas fa-fw fa-drumstick-bite"></i>
        </div>
        <div class="mr-5"></div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <h5><span class="float-left">Pollo</span></h5>
      </a>
    </div>
  </div>

</div>


<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Calcular Promedios</div>
  <div class="card-body">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Empecemos!</strong>  Colocá el precio y kilo de la media res.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <form>
    <div class="form-row right" style="margin-bottom: 20px">
            <div class="col col-md-4 offset-1">
            <input type="text" class="form-control text-center" value="Media Res" disabled>
            </div>
            <div class="col col-md-2 ">
            <input type="number" class="form-control text-center" placeholder="Precio">
            </div>
            <div class="col col-md-2">
            <input type="number" class="form-control text-center" placeholder="Kg">
            </div>
    </div>
    </form>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      Colocále kilo a todos los productos.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">Ultima Actualización</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Kg</th>
            <th class="text-center">Total</th>
          </tr>
        </thead>
        <tbody>
        <div class="form-row">
          <tr>
            <td class="text-center">19/09/2019</td>
            <td>         
                <div class="col col-md-8 offset-2 ">
                  <input type="text" class="form-control text-center" value="Paleta" required>
                </div>
            </td>
            <td>
                <div class="col col-md-6 offset-3">
                  <input type="number" class="form-control text-center" value="233.34" required>
                </div>
            </td>
            <td>
                <div class="col col-md-6 offset-3">
                  <input type="number" class="form-control text-center" value="" required>
                </div>
            </td>
            <td>
                <div class="col col-md-6 offset-3">
                  <input type="number" class="form-control text-center" value="" required>
                </div>
            </td>
          </tr>
          </div>

          <div class="form-row">
          <tr>
            <td class="text-center">19/09/2019</td>
            <td>         
                <div class="col-md-8 offset-md-2">
                  <input type="text" class="form-control text-center" value="Cuadrada" required>
                </div>
            </td>
            <td>
                <div class="col-md-6 offset-md-3">
                  <input type="number" class="form-control text-center" value="170.34" required>
                </div>
            </td>
            <td>
                <div class="col col-md-6 offset-3">
                  <input type="number" class="form-control text-center" value="" required>
                </div>
            </td>
            <td>
                <div class="col col-md-6 offset-3">
                  <input type="number" class="form-control text-center" value="" required>
                </div>
            </td>
          </tr>
          </div>
        </tbody>
      </table>
    </div>
  </div>
  <button type="button" class="btn btn-secondary btn-lg" style="background-color:#8E9AD6">Calcular Promedio</button>
  <div class="card-footer small text-muted">Actualizado última vez - 11:59 PM</div>

</div>


<!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-calculator"></i>
      Resultados</div>
  <div class="row">

  <div class="col-xl-12 col-sm-6 mb-12">
      <div class="card text-white o-hidden h-100" style="background-color:#A0B0F5">
        <div class="card-body">
          <div class="row">
              <div class="col col-md-4" style="border-right:3px solid;">
                  <h3 class="text-center" style="background-color:#6B75A0;   border-radius:5px;">Media Total</h3>
                  <h2 class="text-center">21.500 $</h2>
              </div>
              <div class="col col-md-4" style="border-right:3px solid;">
                  <h3 class="text-center" style="background-color:#6B75A0;  border-radius:5px;">Producto Total</h3>
                  <h2 class="text-center">560,400 kg</h2>
              </div>
              <div class="col col-md-4" style="border-right:3px solid;">
                  <h3 class="text-center" style="background-color:#6B75A0;   border-radius:5px;" >Perdidas</h3>
                  <h2 class="text-center">130 kg</h2>
              </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  </div>
</div>



<!-- /.content-wrapper -->

      <!--<div class="row ">
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
      </div> -->
@endsection
