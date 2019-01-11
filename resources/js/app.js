
require('./bootstrap');


// SweetAlert2
window.Swal = require('sweetalert2');


// Vue
window.Vue = require('vue');

import VueRouter from 'vue-router';

Vue.use(VueRouter);


let routes = [
    { path: '/', component: require('./components/dashboard/Dashboard.vue').default },
    { path: '/Referencia/registrar', component: require('./components/referencia/Registrar.vue').default }
];


const router = new VueRouter({ routes });


Vue.component('menu-left', require('./components/dashboard/MenuLeft.vue'));


const app = new Vue({
    el: '#app',
    router,
    data: {
        token   : document.getElementsByName('_token')[0].value,
    },
    methods: {
        logout: function(){
            axios.interceptors.request.use((config) => {
                Swal({ title: 'Cerrando sesión', allowEscapeKey: false, allowOutsideClick: false,
                    onOpen: () => {
                        Swal.showLoading();
                    }
                });
                
                return config;
            });

            axios.post('/logout', { 
                _token: this.token 
             })
             .then(data => {
                if( data.data.success == 1 ){
                    Swal({ title: 'Sesión finalizada correctamente.', type: 'success', showConfirmButton: false });
                    location.href = '/login';
                }else{
                    Swal({ title: 'Error desconocido al intentar cerrar session.', type: 'error' });
                }
            }).catch(error => {
                console.log('logout error:', error.response);
                Swal({ title: 'Error desconocido al intentar cerrar session.', type: 'error' });
            })
        }
    }
});



