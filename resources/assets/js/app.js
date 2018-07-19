
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue'); 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 

Vue.component('add_round', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
*/
/*
const app = new Vue({
    el: '#add_round_app',
    data: {
      errors: [],
      hole_1_score: null,
      hole_2_score: null,
      hole_3_score: null,
      hole_4_score: null,
      hole_5_score: null,
      hole_6_score: null,
      hole_7_score: null,
      hole_8_score: null,
      hole_9_score: null,
      hole_10_score: null,
      hole_11_score: null,
      hole_12_score: null,
      hole_13_score: null,
      hole_14_score: null,
      hole_15_score: null,
      hole_16_score: null,
      hole_17_score: null,
      hole_18_score: null
    },
    methods:{
      checkForm: function (e) {
        if (this.hole_1_score && this.hole_2_score && this.hole_3_score && this.hole_4_score && this.hole_5_score && this.hole_6_score && this.hole_7_score && this.hole_8_score && this.hole_9_score && this.hole_10_score && this.hole_11_score && this.hole_12_score && this.hole_13_score && this.hole_14_score && this.hole_15_score && this.hole_16_score && this.hole_17_score && this.hole_18_score) {
          return true;
        }
        
        this.errors = [];
        
        if (!this.hole_1_score) {
          this.errors.push('Hole 1 Score is required.');
        }
        if (!this.hole_2_score) {
            this.errors.push('Hole 2 Score is required.');
        }
        if (!this.hole_3_score) {
            this.errors.push('Hole 3 Score is required.');
        }  
        if (!this.hole_4_score) {
            this.errors.push('Hole 4 Score is required.');
        } 
        if (!this.hole_5_score) {
            this.errors.push('Hole 5 Score is required.');
        }
        if (!this.hole_6_score) {
            this.errors.push('Hole 6 Score is required.');
        } 
        if (!this.hole_7_score) {
            this.errors.push('Hole 7 Score is required.');
        }           
        if (!this.hole_8_score) {
            this.errors.push('Hole 8 Score is required.');
        }         
        if (!this.hole_9_score) {
            this.errors.push('Hole 9 Score is required.');
        }  
        if (!this.hole_10_score) {
            this.errors.push('Hole 10 Score is required.');
        }      
        if (!this.hole_11_score) {
            this.errors.push('Hole 12 Score is required.');
        }     
        if (!this.hole_12_score) {
            this.errors.push('Hole 12 Score is required.');
        }     
        if (!this.hole_13_score) {
            this.errors.push('Hole 13 Score is required.');
        }     
        if (!this.hole_14_score) {
            this.errors.push('Hole 14 Score is required.');
        }     
        if (!this.hole_15_score) {
            this.errors.push('Hole 15 Score is required.');
        }     
        if (!this.hole_16_score) {
            this.errors.push('Hole 16 Score is required.');
        }     
        if (!this.hole_17_score) {
            this.errors.push('Hole 17 Score is required.');
        }     
        if (!this.hole_18_score) {
            this.errors.push('Hole 18 Score is required.');
        }                                                                                 

        e.preventDefault();
      }
    }
  })
*/