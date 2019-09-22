<template>
    <div>
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <breadcrumbs :name="name" :action="action"></breadcrumbs>
            <!-- Icon Cards-->
            <header-seccion></header-seccion>

            <!-- Products Load -->
            <products-load>
                
            </products-load>

            <!-- Products List -->
            <products-list></products-list>
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
    data() {
        return {
            name:'Productos',
            action:'Carga'
        }
    },
}
</script>