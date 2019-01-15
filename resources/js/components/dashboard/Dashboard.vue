<template>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header section-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><router-link to="/"><i class="fa fa-tachometer-alt blue"></i> Home</router-link></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <!-- <div class="panel panel-widget" id="item_1"> -->
                <div class="col-xs-12">

                    <div class="panel panel-widget" id="item_1" v-if="(routesAuth.some(data => { return ['all', 'referencia.create',  'referencia_2',  'referencia_3',  'referencia_4'].includes(data) }))">
                        <div class="head-menu-group-x panel-heading widget-heading">
                            <span> REFERENCIA </span>
                        </div>
                        <div class="panel-body">
                            <div class="icon-container-body">

                                <div class="item" v-if="(routesAuth.some(data => { return ['all', 'referencia.create'].includes(data) }))">
                                    <router-link class="icon-file_manager" to="/referencia/registrar"> <img src="../../../images/dashboard/icon_referencia_registrar.png" alt="icon-referencia-registrar" class="img-item-panel"> </router-link>
                                    <router-link class="itemTextWrapper" to="/referencia/registrar"> REGISTRAR REFERENCIA </router-link>
                                </div>

                                <div class="item" v-if="(routesAuth.some(data => { return ['all', 'referencia_2'].includes(data) }))">
                                    <router-link class="icon-file_manager" to="/Referencia/Registrar"> <img src="../../../images/dashboard/icon_referencia_panel.png" class="img-item-panel"> </router-link>
                                    <router-link class="itemTextWrapper" to="/Referencia/Registrar"> PANEL DE REFERENCIAS </router-link>
                                </div>

                                <div class="item" v-if="(routesAuth.some(data => { return ['all', 'referencia_3'].includes(data) }))">
                                    <router-link class="icon-file_manager" to="/Referencia/Registrar"> <img src="../../../images/dashboard/icon_referencia_reporte.png" class="img-item-panel"> </router-link>
                                    <router-link class="itemTextWrapper" to="/Referencia/Registrar"> REPORTE DE REFERENCIAS </router-link>
                                </div>

                                <div class="item" v-if="(routesAuth.some(data => { return ['all', 'referencia_4'].includes(data) }))">
                                    <router-link class="icon-file_manager" to="/Referencia/Registrar"> <img src="../../../images/dashboard/icon_referencia.png" class="img-item-panel"> </router-link>
                                    <router-link class="itemTextWrapper" to="/Referencia/Registrar"> REPORTE DE ACCIONES </router-link>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        </section>
    </div>
</template>


<script>
    export default {
        data: function(){
            return({            
                routesAuth : userRoutes,
            })  
        },
        mounted: function(){
            console.log('userRoutes', userRoutes);
        }
    }
</script>


<style>
    .section-header{
        padding: 20px 15px 20px 15px;
    }
</style>
