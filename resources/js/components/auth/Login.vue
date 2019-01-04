<template>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info" >
                
            <div class="panel-heading">
                <div class="panel-title">Iniciar Session</div>
            </div>

            <div id="div-alerts-login">
                <div class="alert alert-info alert-dismissible hidden">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> <img src="img/Cargar.gif" width="20" height="20"> Ingresando </strong>
                </div> 
            </div>
                

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    
                <form id="loginform" class="form-horizontal" role="form" @submit.prevent="iniciarSesion()">
                            
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" v-model="usuario" placeholder="username or email" required>                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" v-model="password" placeholder="password" required>
                    </div>
                            

                        
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" v-model="remember"> Recordarme
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" id="btn-login" class="btn btn-primary"> <span class="glyphicon glyphicon-user"></span> INGRESAR </button>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Olvido su contraseña? 
                                <router-link to="/PasswordReset">
                                    Click aqui
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
        data: function(){
            return({
                token   : document.getElementsByName('_token')[0].value,
                usuario : '',
                password: '',
                remember: false,
            })  
        },
        methods: {
            iniciarSesion: function(){
                axios.interceptors.request.use((config) => {
                    document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('info', '* Comprobando credenciales', 0);
                    return config;
                });

                axios.post('login', {
                    _token   : this.token,
                    usuario  : this.usuario,
                    password : this.password,
                    remember : this.remember,
                })
                .then( data => {
                    console.log('success:', data.data);

                    if( data.data.success == 1 )
                    {
                        document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('success', ' Ingresando', 1);
                        location.href = '/';
                    }
                    else{
                        document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('danger', '* '+ data.data.msgerror +'', 0);
                    }
                })
                .catch( error => { 
                    console.log('error', error);

                    document.getElementById('div-alerts-login').innerHTML = this.divs_alerts('danger', '* Error desconocido al intentar iniciar session.', 0);
                })
            },
            divs_alerts: function( tipo, message, img ){
                let image = '';
                if( img == 1 ) image = '<img src="img/Cargar.gif" width="20" height="20">';
                let alert = '<div class="alert alert-'+ tipo +' alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong> '+ image +' '+ message +'</strong> </div>';

                return alert;
            }
        },
        mounted: function(){
            //axios.post('logout', { _token: this.token });
            console.log('Component mounted Login.vue.')
        }
    }
</script>
