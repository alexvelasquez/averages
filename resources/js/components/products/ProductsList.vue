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
                <tr v-for="(product, index) in products" v-bind:key="product.id">
                    <td class="text-center">{{product.date_update}}</td>
                    <td class="align-content-center">       
                        <div class="form-row right">
                            <div class="col col-md-8 offset-2">
                            <input type="text" class="form-control text-center text-capitalize" :value="product.name" v-on:input="prodName=$event.target.value">
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="form-row right">
                            <div class="col col-md-8 offset-2">
                           <input type="number" class="form-control text-center text-capitalize" :value="product.price"  v-on:input="prodPrice=$event.target.value">
                            </div>

                        </div>
                    </td>
                    <td style="border:0">
                        <div class="form-row right">
                            <div class="col col-md-6">
                            <button class="btn btn-success" @click="editProduct(prodName,prodPrice,product.id)"><i class="fas fa-edit"></i></button>
                            </div>
                            <div class="col col-md-6">
                                <button  class="btn btn-danger" @click="deleteProduct(index, product.id)">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                            
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
    props: {
        products:Array
    },
    data() {
        return {
            product:[],
            date:null,
            prodName:null,
            prodPrice:null

        }
    },
    methods:{

        /** CREATE PRODUCT */
        createProduct(prodName,prodPrice){
            if (prodName == null) {
                this.product.push({price:prodPrice, date_update:this.date});
            }
            else if(prodPrice == null){
                this.product.push({name:prodName, date_update:this.date});
            }
            else{
                this.product.push({name:prodName, price:prodPrice, date_update:this.date});
            }
        },

        /** EDIT PRODUCT */
        editProduct(prodName, prodPrice, id){
            if (prodName != null || prodPrice != null) {
                this.date_format()
                this.createProduct(prodName,prodPrice)
                axios
                .post('products/edit/'+id,this.product[0])
                .then(response => {
                    if(response.data.code==200){
                        alertify.success("Modifcado!");
                        this.product = []
                    }
                })
                .catch(e => {
                // Podemos mostrar los errores en la consola
                    alertify.error("Ha ocurrido un error!")
                })   
            }
        },

        /** DELETE PRODUCT */
        deleteProduct(index,element){
            axios
                .get('products/delete/'+element)
                .then(response => {
                    if(response.data.code==200){
                        alertify.success("Eliminado!");
                        this.products.splice(index,1)
                    }
                })
                .catch(e => {
                // Podemos mostrar los errores en la consola
                    alertify.error("Ha ocurrido un error!")
                })   

        },

        /** DATE FORMATE (DD/MM/YYYY) */
        date_format(){
            let date = new Date();

            let day= date.getDate();
            let month=date.getMonth()+1;
            let year=date.getFullYear();
            if (day.toString().length<2) {
                day = "0"+day;
            }
            if (month.toString().length<2){
                month = "0"+month;
            }
            this.date = year+'/'+month+'/'+day;
            
        },
        vatMatch: function(code) {
            return this.config.vats.filter(function(vat) {
                return  vat.countrycode == code;
            }).length > 0;
        },
    }

}
</script>