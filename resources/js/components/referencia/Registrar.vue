<template>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header section-header">
            <h1>
                Referencia
                <small>Registrar</small>
            </h1>
            <ol class="breadcrumb">
                <li><router-link to="/"><i class="fa fa-tachometer-alt blue"></i> Referencia</router-link></li>
                <li class="active">Registrar</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <!-- <div class="panel panel-widget" id="item_1"> -->
                <div class="col-xs-12">
                    <form id="registrar-referencia" @submit.prevent="registrarReferencia()">
                        <div class="col-xs-12 banner-form">
                            <h5 class="banner-title"> DATOS DEL PACIENTE </h5>
                        </div>

                        
                        <div class="col-xs-9">
                            <!--- PRIMERA LINEA -->
                            <div class="col-xs-5" >
                                <div class="form-group">
                                    <label> TIPO DE DOCUMENTO </label>
                                    <div class="input-group">
                                        <span class="input-group-addon btn_primary"> T - D </span>
                                        <select class="form-control" id="tipo-documento" v-model="paciente.tipo_documento">
                                            <option value="CC" selected>Cedula de Ciudadania</option>
                                            <option value="TI">Tarjeta de Identidad</option>
                                            <option value="CE">Cedula de Extranjeria</option>
                                            <option value="PA">Pasaporte</option>
                                            <option value="RC">Registro Civil</option>
                                            <option value="NU">No. Unico de Id. Personal</option>
                                            <option value="AS">Adulto sin identificación</option>
                                            <option value="MS">Menor sin Identificación</option>
                                            <option value="CD">Carnet diplomático</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label> DOCUMENTO </label>
                                    <div class="input-group">
                                        <span class="input-group-addon btn_primary"> {{ paciente.tipo_documento }} </span>
                                        <input class="form-control" type="text" id="documento" v-model="paciente.documento" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12"></div>

                            <!--- SEGUNDA LINEA -->

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label> NOMBRES </label>
                                    <input class="form-control" type="text" id="nombres" v-model="paciente.nombres" required>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label> APELLIDOS </label>
                                    <input class="form-control" type="text" id="apellidos" v-model="paciente.apellidos" required>
                                </div>
                            </div>

                            <div class="col-xs-12"></div>

                            <!--- TERCERA LINEA -->

                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label> FECHA DE NACIMIENTO </label>
                                    <div class="input-group">
                                        <span class="input-group-addon btn_primary"> <span class="glyphicon glyphicon-calendar"></span> </span>
                                        <input class="form-control" type="date" id="nacimiento" v-model="paciente.nacimiento" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label> EDAD </label>
                                    <div class="input-group">
                                        <input class="form-control" type="date" id="edad" v-model="paciente.edad" disabled>
                                        <span class="input-group-addon btn_primary"> AÑOS </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label> GENERO </label>
                                    <div class="input-group">
                                        <span class="input-group-addon btn_primary"> <span class="glyphicon glyphicon-user"></span> </span>
                                        <select class="form-control" id="genero" v-model="paciente.genero" required>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12"></div>

                            <!--- CUARTA LINEA -->

                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label> PAGADOR </label>
                                    <select class="form-control" id="pagador" v-model="referencia.pagador" required>
                                        <option v-for="eps in listado_eps" v-bind:value="eps.id">{{ eps.razon_social }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label> REGIMEN </label>
                                    <select class="form-control" id="tipo-documento" v-model="referencia.regimen" required>
                                        <option selected>Subsidiado</option>
                                        <option>Contributivo</option>
                                        <option>Especial</option>
                                        <option>Vinculado</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- LOGO DATOS PACIENTE -->
                        <div class="col-xs-3">
                            <img src="../../../images/paciente/icono-paciente.png" alt="icono-paciente">
                        </div>



                        <div class="col-xs-12 banner-form">
                            <h5 class="banner-title"> DATOS DE LA REFERENCIA </h5>
                        </div>

                        <div class="col-xs-9">
                            <!--- PRIMERA LINEA -->
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label> CODIGO CIE10 </label>
                                    <input class="form-control" type="text" id="codigo-cie10" v-model="referencia.codigo_cie10">
                                </div>
                            </div>

                            <div class="col-xs-9">
                                <div class="form-group">
                                    <label> DIAGNOSTICO CIE10 </label>
                                    <input class="form-control" type="text" id="diagnostico-cie10" v-model="referencia.diagnostico_cie10">
                                </div>
                            </div>

                            <div class="col-xs-12"></div>

                            <!--- SEGUNDA LINEA -->

                        </div>


                        <!-- LOGO DATOS REFERENCIA -->
                        <div class="col-xs-3">
                            <img src="../../../images/paciente/icono-paciente.png" alt="icono-paciente">
                        </div>
        
                            

                    </form>
                    
                        
                </div>
            </div>
        </section>
    </div>
</template> 


<script>
export default {
    data: function(){
        return({
            paciente: {
                tipo_documento: '',
                documento: '',
                nombres: '',
                apellidos: '',
                nacimiento: this.getFechaActual(),
                genero: '',

                getEdad: function(){
                    console.log(this.paciente.nacimiento)
                }
            },
            referencia: {
                pagador: '',
                regimen: '',
                tipo: ''
            },
            listado_eps: [],
        })
    },
    methods: {
        registrarReferencia: function() {
            console.log(this.paciente.tipo_documento, this.paciente.documento);
        },
        getFechaActual: function() {
            let now = new Date();
	        return( now.getFullYear() +'-'+ ('0'+ (now.getMonth() + 1)).substr(-2) +'-'+ ('0'+ now.getDate()).substr(-2) );
        }
    },
    mounted: function() {
        console.log('Componente Registra-Referencia')

        axios.post('/pagador')
        .then((response) => {
            console.log(response);
            this.listado_eps = response.data.pagadores;
            $('select#pagador').select2({theme: 'bootstrap'});
        })
        .catch((error) => {
            console.log(error);
        });
    }
}
</script>



<style>

.banner-form {
    background-color: #019934;
    margin-top: 15px;
    margin-bottom: 20px;
}

.banner-title {
    color: #ffffff;
    font-weight: bold;
    text-shadow: 1px 1px 1px #bba1a1;
    text-align: center;
}

.form-control {
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
}

.btn_primary {
    color: #fff;
    background-color: #204d74 !important;
    border-color: #122b40 !important;
}

</style>
