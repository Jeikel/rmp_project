require('./bootstrap');
window.Vue = require('vue');

import VueMask from 'v-mask'
Vue.use(VueMask);

Vue.component('ip-basic', require('./components/ip_basic.vue'));
Vue.component('ip-job', require('./components/ip_job.vue'));
Vue.component('ip-education', require('./components/ip_education.vue'));
Vue.component('ip-press', require('./components/ip_press.vue'));
Vue.component('ip-positions', require('./components/ip_positions.vue'));

const app = new Vue({
    el: '#app',
});
