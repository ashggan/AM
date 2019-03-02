require('./bootstrap');
// require('./vue-select-image');
import VueSelectImage from 'vue-select-image';
import Multiselect from 'vue-multiselect';
import Lightbox from 'vue-pure-lightbox';
// require('vue-lazyload') ;
window.Vue = require('vue');
Vue.use(VueSelectImage);
Vue.use(Lightbox);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('techs', require('./components/techs.vue'));
Vue.component('item-list', require('./components/itemList.vue'));
Vue.component('imgupload', require('./components/imgupload.vue'));
Vue.component('contact-form', require('./components/contactForm.vue'));
Vue.component('cons', require('./components/cons.vue'));


Vue.component('multiselect', Multiselect);

// Vue.use(VueLazyload);

const app = new Vue({
    el: '#app',
    components: { VueSelectImage,Multiselect },
});
