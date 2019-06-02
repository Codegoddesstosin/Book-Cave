
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


//var StarRating = require('vue-star-rating');
import StarRating from 'vue-star-rating'
require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('Ratings', require('./components/Ratings.vue'));


const app = new Vue({
    el: '#app'
});

requirejs.config({
    baseUrl: "",
    paths: {
      'vue': 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.min',
      'VueStarRating': 'https://unpkg.com/vue-star-rating@1.4.0/dist/star-rating.min'
    }
  });


  require(['vue', 'VueStarRating'], function(Vue, StarRating) {
    Vue.component('star-rating', StarRating.default);
    new Vue({
      el: '#app'
    })
  });





Vue.component('star-rating', VueStarRating.default)

new Vue({
  el: '#app',
  methods: {
    setRating: function(rating) {
      this.rating = "You have Selected: " + rating + " stars";
    },
    showCurrentRating: function(rating) {
      this.currentRating = (rating === 0) ? this.currentSelectedRating : "Click to select " + rating + " stars"
    },
    setCurrentSelectedRating: function(rating) {
      this.currentSelectedRating = "You have Selected: " + rating + " stars";
    }
  },
  data: {
    rating: "No Rating Selected",
    currentRating: "No Rating",
    currentSelectedRating: "No Current Rating",
    boundRating: 3,
  }
});



