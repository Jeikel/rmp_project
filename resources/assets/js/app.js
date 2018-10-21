require('./bootstrap');
window.Vue = require('vue');

Vue.component('ip-basic', require('./components/ip_basic.vue'));

const app = new Vue({
    el: '#app',
});
