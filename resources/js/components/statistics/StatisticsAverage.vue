<template>
    <div>
    <div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Calcular Promedios</div>
    <div class="card-body">
        <form>
        <div class="form-row right" style="margin-bottom: 20px">
                <div class="col col-md-3">
                <input type="text" class="form-control text-center" value="Media Res" disabled>
                </div>
                <div class="col col-md-3 ">
                <input type="number" class="form-control text-center" placeholder="Precio">
                </div>
                <div class="col col-md-3">
                <input type="number" class="form-control text-center" placeholder="Peso (Kg)">
                </div>
                
                    <div class="col col-md-3">
                    <input type="submit" class="btn btn-primary" value="Agregar otro"  disabled required>
                    </div>
                


        </div>
        </form>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border:2px solid #6F779F;  border-radius:5px;" >
            <thead>
            <tr style="background-color:#6F779F;" class="text-white" >
                <th class="text-center">Ultima Actualización</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Peso (Kg)</th>
                <th class="text-center">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products"  v-bind:key="product.id">
                <td class="text-center">{{product.date_update}}</td>
                <td  width="30%">         
                    <div class="text-center">
                        {{product.name}}
                    </div>
                </td>
                <td width="20%">
                    <div class="text-center">
                        $ {{product.price}}
                    </div>
                    
                   
                </td>
                <td>
                    <div class="col col-md-10 offset-1">
                    <input type="number" class="form-control text-center" value="" placehoder="peso (kg)" required>
                    </div>
                </td>
                <td>
                    <div class="col col-md-8 offset-2">
                    <input type="number" class="form-control text-center" value=""  disabled required>
                    </div>
                </td>
                
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <button type="button" class="btn btn-secondary btn-lg" style="background-color:#6F779F"><h4>Calcular Promedio</h4></button>
    <div class="card-footer small text-muted">Actualizado última vez - 11:59 PM</div>

    </div>


    </div>
</template>
<script>
export default {
    props: {
        products:Array
    },
    methods:{
    }
}
</script>