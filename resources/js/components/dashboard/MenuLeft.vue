<template>
    <div>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                <img src="../../../images/admin-lte/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                <p> {{nombreUsuario}} </p>
                <router-link to="/"><i class="fa fa-circle text-success"></i> Online</router-link>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">NAVEGACIÓN PRINCIPAL</li>
                <router-link tag="li" to="/" exact-active-class="active">
                    <a><i class="fa fa-tachometer-alt blue"></i> <span>Dashboard</span></a>
                </router-link>

                <li class="treeview" v-if="(routesAuth.some(data => { return ['all', 'referencia.create',  'referencia_2',  'referencia_3',  'referencia_4'].includes(data) }))">
                    <a>
                        <i class="fa fa-folder"></i>
                        <span>Referencia</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <router-link tag="li" to="/referencia/registrar" exact-active-class="active" 
                            v-if="(routesAuth.some(data => { return ['all', 'referencia.create'].includes(data) }))">
                            <a><i class="fas fa-edit"></i> Registrar</a>
                        </router-link>
                        <router-link tag="li" to="/referencia" exact-active-class="active" 
                            v-if="(routesAuth.some(data => { return ['all', 'referencia.index'].includes(data) }))">
                            <a><i class="fas fa-chalkboard"></i> Panel de Referencias</a>
                        </router-link>
                        <router-link tag="li" to="/referencia/reporte" exact-active-class="active" 
                            v-if="(routesAuth.some(data => { return ['all', 'referencia.reporte'].includes(data) }))">
                            <a><i class="fas fa-chart-bar"></i> Reporte de Referencias</a>
                        </router-link>
                    </ul>
                </li>


                <li class="treeview" v-if="(routesAuth.some(data => { return ['all', 'referencia.create',  'referencia_2',  'referencia_3',  'referencia_4'].includes(data) }))">
                    <router-link to="/">
                        <i class="fa fa-file-alt"></i>
                        <span>Contrarreferencia</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </router-link>
                    <ul class="treeview-menu">
                        <li><router-link to="/Referencia/Registrar"><i class="far fa-circle"></i> Registrar</router-link></li>
                        <li><router-link to="/Referencia/Registrar"><i class="far fa-circle"></i> Panel de Contrarreferencias</router-link></li>
                        <li><router-link to="/Referencia/Registrar"><i class="far fa-circle"></i> Reporte de Contrarreferencias</router-link></li>
                    </ul>
                </li>

                <li class="treeview">
                <router-link to="/" style="display: none">
                    <i class="fa fa-folder"></i> <span>Contrarreferencia</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </router-link>
                <ul class="treeview-menu">
                    <li class="active"><router-link to="/"><i class="fa fa-edit"></i>Registrar Referencia</router-link></li>
                    <li><router-link to="/"><i class="far fa-list-alt"></i>Panel de Referencia</router-link></li>
                </ul>
                </li>


                <li><router-link to="/"><i class="fa fa-book"></i> <span>Documentation</span></router-link></li>
                <li><router-link to="/" v-on:click.native="cerraSesion"><i class="fa fa-power-off red"></i> <span>Salir</span></router-link></li>
                <li class="header">LABELS</li>
                <li><router-link to="/"><i class="fa fa-circle-o text-red"></i> <span>Important</span></router-link></li>
                <li><router-link to="/"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></router-link></li>
                <li><router-link to="/"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></router-link></li>
            </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    </div>
</template>


<script>

import EventBus from '../../EventBus';

export default {
    data: function() {
        return ({
            nombreUsuario: userNombre,
            routesAuth : userRoutes,
        })
    },
    methods: {
        cerraSesion: function(){
            EventBus.$emit('cerrar-sesion');
        }
    },
    mounted: function() {
        console.log('Componente menu-left mounted');
    }
}
</script>


<style>

ul.sidebar-menu > li.active > a, 
ul.sidebar-menu > li > a:hover,
ul.treeview-menu > li.active > a,
ul.treeview-menu > li > a:hover {
  background-color: #010066 !important;
}


ul.treeview-menu > li {
    overflow: hidden;
}

</style>
