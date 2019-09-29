<template>
    <div>
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <breadcrumbs :name="name" :action="action"></breadcrumbs>
            <!-- Icon Cards-->
            <header-seccion></header-seccion>

            <!-- Products Average -->
            <statistic-average :products="products" v-on:save="Calcular($event)"></statistic-average>

            <!-- Products Total -->
            <total-result :totales="totales"></total-result>
        </div>
    </div>
</template>
<script>

import Breadcrumbs from '../Breadcrumbs';
import HeaderSeccion from '../HeaderSeccion';
import StatisticAverage from './StatisticsAverage';
import TotalResult from './TotalResult';

export default {
    components:{Breadcrumbs,HeaderSeccion,StatisticAverage,TotalResult},
    data() {
        return {
            name:'Promedios',
            action:'Calculos',

            products:null
        }
    },
    mounted(){
        //swal.fire('Completa los datos y calculá tu promedio')
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
    methods:{
    }
}
</script>