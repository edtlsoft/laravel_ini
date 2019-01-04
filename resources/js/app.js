
require('./bootstrap');

window.Vue = require('vue');


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',

    data: {
        token   : document.getElementsByName('_token')[0].value,
        siderbarToggle: false
    },

    methods: {
        logout: function(){
            axios.post('/logout', { 
                _token: this.token 
             })
             .then(data => {
                data.data.success == 1 ? (location.href = '/login') : ( alert('Error al intentar finalizar la sesion.') ) ;
                
            }).catch(error => {
                console.log('logout error:', error.response);
            })
        }
    },

    mounted: function(){
        /*$('a#sidebar-toggle').click(function(){ console.log( this.siderbarToggle )
            if(this.siderbarToggle == true){
                $('body').addClass('sidebar-collapse');
                this.siderbarToggle = false;
            }else{
                $('body').removeClass('sidebar-collapse');
                this.siderbarToggle = true;
            }
        });*/
    }
});



