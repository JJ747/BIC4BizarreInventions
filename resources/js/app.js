/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import vue from 'vue';

window.Vue = vue;

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
Vue.component('query-message', require('./components/base/QueryMessage.vue').default);
Vue.component('dashboard', require('./components/DashboardComponent.vue').default);
Vue.component('invention-index', require('./components/base/InventionIndexComponent.vue').default);

Vue.component('domain-index', require('./components/domain/ListDomainsComponent.vue').default);
Vue.component('domain-show', require('./components/domain/ShowDomainComponent.vue').default);
Vue.component('domain-create', require('./components/domain/CreateDomainComponent.vue').default);
Vue.component('domain-edit', require('./components/domain/EditDomainComponent.vue').default);

Vue.component('invention-index', require('./components/invention/ListInventionsComponent.vue').default);
Vue.component('invention-show', require('./components/invention/ShowInventionComponent.vue').default);
Vue.component('invention-create', require('./components/invention/CreateInventionComponent.vue').default);
Vue.component('invention-edit', require('./components/invention/EditInventionComponent.vue').default);
Vue.component('invention-search', require('./components/invention/SearchInventionComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
