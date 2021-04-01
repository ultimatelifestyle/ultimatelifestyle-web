require('./bootstrap');

window.Vue = require('vue');

import router from './Helpers/router.js'
import SweetAlert from './Helpers/SweetAlert'
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',
    router
});
