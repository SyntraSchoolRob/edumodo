/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
//require('../../resources/assets/admin_assets/js/active.js');
require('../../resources/assets/admin_assets/js/bootstrap.min.js');
//fonts= chart bundle
require('../../resources/assets/admin_assets/js/Chart.bundle.js');
require('../../resources/assets/admin_assets/js/Chart.js');
require('../../resources/assets/admin_assets/js/chart-area-demo.js');
require('../../resources/assets/admin_assets/js/chart-bar-demo.js');
require('../../resources/assets/admin_assets/js/chart-pie-demo.js');

//require('../../resources/assets/admin_assets/js/datatables-demo.js');
//require('../../resources/assets/admin_assets/js/jquery.easing.compatibility.js');
require('../../resources/assets/admin_assets/js/jquery.easing.js');
require('../../resources/assets/admin_assets/js/jquery-2.2.4.min.js');

//require('../../resources/assets/admin_assets/js/map-active.js');
require('../../resources/assets/admin_assets/js/mijnscript.js');
//require('../../resources/assets/admin_assets/js/plugins.js');
require('../../resources/assets/admin_assets/js/popper.min.js');
require('../../resources/assets/admin_assets/js/sb-admin-2.js');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
