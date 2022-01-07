
require('./bootstrap');

window.Vue = require('vue').default;
window.axios = require('axios');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('register', require('./components/Register.vue').default);
Vue.component('home', require('./components/Home.vue').default);

const app = new Vue({
    el: '#app',
});
