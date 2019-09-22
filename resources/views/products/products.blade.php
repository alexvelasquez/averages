@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Productos</a>
  </li>
  <li class="breadcrumb-item active">Carga</li>
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

<!-- Area Chart Example-->
<div class="card mb-3">
  <div class="card-header">
  <i class="fas fa-plus-circle"></i>
    Cargar Producto
  </div>
  <div class="card-body">
  <form>
  <div class="form-row right">
    <div class="col col-md-2 offset-1">
      <input type="text" class="form-control" value="Seccion/Carne" disabled>
    </div>
    <div class="col col-md-4">
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="col col-md-2 ">
      <input type="number" class="form-control" placeholder="Precio ">
    </div>
    <div class="col col-md-2">
      <button class="btn text-white" style="background-color:#8E9AD6"><i class="fas fa-check"></i></button>
    </div>
  </div>
</form>
  </div>

  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


<!-- Area Chart Example-->
<!-- <div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-chart-area"></i>
    Area Chart Example</div>
  <div class="card-body">
    <canvas id="myAreaChart" width="100%" height="30"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
-->

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Lista de Productos</div>
  <div class="card-body align-right">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">Ultima Actualización</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Precio</th>
            <th style="border:0"></th>
            <th style="border:0"></th>
          </tr>
        </thead>
        <tbody>
        <div class="form-row">
          <tr>
            <td class="text-center">19/09/2019</td>
            <td>         
                <div class="col col-md-6 offset-3 ">
                  <input type="text" class="form-control text-center text-capitalize" value="Paleta">
                </div>
            </td>
            <td>
                <div class="col col-md-6 offset-3">
                  <input type="number" class="form-control text-center text-capitalize" value="233.34">
                </div>
            </td>
            <td style="border:0">
              <div style="float:left; text-align:right">
                <ul style="list-style:none">
                <li  style="display:inline-block; text-align:left">
                <div class="col-md-6">
                <button  class="btn btn-success"  disabled><i class="fas fa-edit"></i></button>
                    </div>
                </li>
                 <li style="display:inline-block; text-align:left">
                 <div class="col-md-6" >
                        <button  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </li>
                </ul>
              <div>
            </td>
          </tr>
          </div>

          <div class="form-row">
          <tr>
            <td class="text-center">19/09/2019</td>
            <td>         
                <div class="col-md-6 offset-md-3 ">
                  <input type="text" class="form-control text-center text-capitalize" value="Cuadrada">
                </div>
            </td>
            <td>
                <div class="col-md-6 offset-md-3">
                  <input type="number" class="form-control text-center text-capitalize" value="170.34">
                </div>
            </td>
            <td style="border:0">
            <div style="float:left; text-align:right">
                <ul style="list-style:none">
                <li  style="display:inline-block; text-align:left"><div class="col-md-6">
                <button  class="btn btn-success"  disabled><i class="fas fa-edit"></i></button>
                    </div>
                </li>
                 <li style="display:inline-block; text-align:left"><div class="col-md-6" >
                        <button  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </li>
                </ul>
              <div>
            </td>
          </tr>
          </div>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
