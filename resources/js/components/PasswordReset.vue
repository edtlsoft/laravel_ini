<template>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info" >
                
            <div class="panel-heading">
                <div class="panel-title">Restablecer la contraseña</div>
            </div>

            <div id="div-alerts-login">
                <div class="alert alert-info alert-dismissible hidden">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> <img src="img/Cargar.gif" width="20" height="20"> Ingresando</strong>
                </div> 
            </div>
                

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    
                <form id="passwordResetForm" class="form-horizontal" role="form" @submit.prevent="restablecerContrasena()">
                            
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">@</span>
                        <input id="passwordReset-email" type="text" class="form-control" name="email" v-model="email" placeholder="Ingrese su correo">                                        
                    </div>
                            

                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <button type="submit" id="btn-login" class="btn btn-primary"> <span class="glyphicon glyphicon-user"></span> RESTABLECER CONTRASEÑA </button>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Ya tienes una cuenta? 
                                <router-link to="/">
                                    Iniciar session
                                </router-link>
                            </div>
                        </div>
                    </div>

                </form>     



            </div>                     
        </div>  
    </div>
</template>

<script>
    export default {
        //el: '#loginbox',
        data() {
            return({
                token : document.getElementsByName('_token')[0].value,
                email : '',
            })
        },
        methods: {
            restablecerContrasena: function(){
                axios.interceptors.request.use((config) => {
                    console.log( this.div_alert );
                    document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('info', '* Enviando correo', 1);
                    return config;
                });

                axios.post('/password/email', {
                    _token : this.token,
                    email  : this.email,
                })
                .then( data => {
                    console.log('success', data);

                    if( data.data.success == 1 )
                    {
                        document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('success', ' Ingresando', 1);
                        location.href = '/home';
                    }
                    else{
                        document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('danger', '* '+ data.data.msgerror +'', 0);
                    }
                })
                .catch( error => { 
                    console.log('error', error);

                    document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('danger', '* Error desconocido al intentar enviar el correo.', 0);
                })
            },
            divs_alerts: function( tipo, message, img ){
                let image = '';
                if( img == 1 ) image = '<img src="img/Cargar.gif" width="20" height="20">';
                let alert = '<div class="alert alert-'+ tipo +' alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong> '+ image +' '+ message +'</strong> </div>';

                return alert;
            }
        },
        mounted() {
            //axios.post('logout', { _token: this.token });
            console.log('Component mounted Login.vue.')
        }
    }
</script>
