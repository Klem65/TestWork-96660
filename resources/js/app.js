require('./bootstrap');


import Vue from 'vue';

Vue.component('phone', require('./components/Phone.vue').default);

const app = new Vue({
  el: '#app'
});
