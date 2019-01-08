
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


// SweetAlert2
window.Swal = require('sweetalert2');


// Vue
window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)


let routes = [
    { path: '/',              component: require('./components/auth/Login.vue').default },
    { path: '/PasswordReset', component: require('./components/auth/PasswordReset.vue').default }
]

const router = new VueRouter({
    routes
})

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router,
    mounted() {
        document.getElementById('app').style.height = window.innerHeight + 'px';
        console.log('mounted');
    },
});

