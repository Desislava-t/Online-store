/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./dropdown-nav');
require('./anchors');


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

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('swiper-component', require('./components/SwiperComponent').default);
Vue.component('best-selling-component', require('./components/BestSellingComponent').default);
Vue.component('blog-article-component', require('./components/BlogArticleComponent').default);
Vue.component('blog-review-component', require('./components/BlogReviewComponent').default);
Vue.component('blog-article-information', require('./components/BlogArticleInformationComponent').default);
Vue.component('service-component', require('./components/ServiceComponent.vue').default);
Vue.component('about-us-component', require('./components/AboutUsComponent.vue').default);
Vue.component('subscriber-component-footer', require('./components/FooterSubscriberComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });


const component = new Vue({
    el: '#component',
});