<template>
    <div>
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-plus-circle"></i>
                Cargar Producto
            </div>
            <div class="card-body">
            <form @submit.prevent="saveProduct">
            <div class="form-row right">
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
            price:null
        }
    },
    methods:{
        saveProduct(){
            this.product.push({name:this.name, price:this.price});
            
            axios
            .post('products/carga',this.product)
            .then(response => (
               console.log(response))
            )
        }
    }
    
}
</script>