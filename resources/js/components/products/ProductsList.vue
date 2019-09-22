<template>
    <div>
        <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Lista de Productos
        </div>
        <div class="card-body align-right">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                <thead>
                    <tr>
                    <th class="text-center">Ultima Actualización</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Precio</th>
                    <th style="border:0"></th>
                    </tr>
                </thead>
                <tbody>
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
                                    <button  class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                    </button>
                            </div>
                            </li>
                        </ul>
                    </div>
                    </td>
                    </tr>
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
                        <li style="display:inline-block; text-align:left">
                            <div class="col-md-6" >
                                <button  class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        </ul>
                    </div>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
</div>
</template>
<script>
export default {
    
}
</script>