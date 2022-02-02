
window.Vue = require('vue');

Vue.component('carousel', require('./components/partials/Carousel.vue').default);
Vue.component('movies-container', require('./components/partials/MoviesContainer.vue').default);

// import App from './components/App.vue';

const app = new Vue({
    el: '#root',
    // render: h => h(App)
});
