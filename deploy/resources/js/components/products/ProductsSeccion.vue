<template>
    <div>
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <breadcrumbs :name="name" :action="action"></breadcrumbs>
            <!-- Icon Cards-->
            <header-seccion></header-seccion>

            <!-- Products Load -->
            <products-load v-on:save="newProduct($event)">
                
            </products-load>

            <!-- Products List -->
            <products-list :products="products"></products-list>
        </div>
    </div>
</template>
<script>
import Breadcrumbs from '../Breadcrumbs';
import HeaderSeccion from '../HeaderSeccion';
import ProductsLoad from './ProductsLoad';
import ProductsList from './ProductsList';

export default {
    components:{Breadcrumbs,HeaderSeccion,ProductsList,ProductsLoad},
    mounted(){
        axios
        .get('products/list')
        .then(response => {
            if(response.data.code==200){
                this.products = response.data.data;
            }
        })
        .catch(e => {
        // Podemos mostrar los errores en la consola
            alertify.error("Ha ocurrido un error!")
        })
    },
    data() {
        return {
            name:'Productos',
            action:'Carga',

            products:null,
        }
    },
    methods:{
        newProduct(product){
            console.log(product);
            this.products.push(product);
        }
    }
}
</script>