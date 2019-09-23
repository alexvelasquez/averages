<template>
    <div>
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-plus-circle"></i>
                Cargar Producto
            </div>
            <div class="card-body">
            <form @submit.prevent="saveProduct">
            <div class="form-row">
                <div class="col col-md-2 offset-1">
                <input type="text" class="form-control" value="Seccion/Carne" disabled>
                </div>
                <div class="col col-md-4">
                <input type="text" class="form-control" placeholder="Nombre" v-model="name">
                </div>
                <div class="col col-md-2 ">
                <input type="number" class="form-control" placeholder="Precio" v-model="price">
                </div>
                <div class="col col-md-2">
                <button class="btn text-white" style="background-color:#8E9AD6" title="Agregar"><i class="fas fa-check"></i></button>
                </div>
            </div>
            </form>
            </div>
            </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            product:[],
            name:null,
            price:null,
            date:null
        }
    },
    methods:{

        /** SAVE PRODUCT */
        saveProduct(){
            this.date_format();
            this.createProduct();
            axios
            .post('products/carga',this.product[0])
            .then(response => {
                if(response.data.code==200){
                    this.$emit('save',this.product[0])
                        swal.fire(
                            'Agregado!',
                            'Seguí cargando mas productos!',
                            'success'
                        )

                    this.product=[];
                }
            })
            .catch(e => {
            // Podemos mostrar los errores en la consola
                alertify.error("Ha ocurrido un error!")
            })
        },

        /** CREATE PRODUCT */
        createProduct(){
            this.product.push({name:this.name, price:this.price, date_update:this.date});
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
            
        }
    }
    
}
</script>