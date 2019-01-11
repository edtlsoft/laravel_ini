<template>
    <div>
        <ol class="breadcrumb">
            <li><router-link to="/"><i class="fa fa-dashboard"></i> Home</router-link></li>
            <li class="active">Dashboard</li>
        </ol>

        <div class="item">
            <router-link class="icon-file_manager" to="./generar_rips"> <img src="../../../images/dashboard/icon_referencia.png" class="img-item-panel"> </router-link>
            <router-link class="itemTextWrapper" to="./generar_megaplano"> REGISTRAR REFERENCIA </router-link>
        </div>
    </div>
</template>


<script>
    export default {
        data: function(){
            return({            
                usuario : '',
            })  
        },
        mounted: function(){
            //console.log(userRoutes);
        }
    }
</script>