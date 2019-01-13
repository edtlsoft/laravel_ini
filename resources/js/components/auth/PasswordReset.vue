<template>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info" >
                
            <div class="panel-heading">
                <div class="panel-title">Restablecer la contraseña</div>
            </div>
                

            <div style="padding-top:30px" class="panel-body">
                    
                <form id="passwordResetForm" class="form-horizontal" role="form" @submit.prevent="restablecerContrasena()">
                            
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">@</span>
                        <input id="passwordReset-email" type="text" class="form-control" name="email" v-model="email" placeholder="Ingrese su correo" required>
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
                    Swal({ title: 'Enviando correo para restablecer su contraseña', allowEscapeKey: false, allowOutsideClick: false,
                        onOpen: () => {
                            Swal.showLoading();
                        }
                    })

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
                        Swal({ type: 'success', title: 'Correo enviado exitosamente', text: 'Revise la bandeja de recibos o de spam de su correo y de click en el enlace para restablecer su contraseña.' });
                    }
                    else{
                        Swal({ type: 'error', title: data.data.msgerror});
                    }
                })
                .catch( error => { 
                    console.log('error', error);
                    Swal({ type: 'error', title: 'Error desconocido al intentar enviar el correo.' });
                })
            }
        },
        mounted() {
            //axios.post('logout', { _token: this.token });
            console.log('Component mounted Login.vue.')
        }
    }
</script>
