/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('select2');
window.AutoNumeric = require('autonumeric/dist/autoNumeric.min');
require('@fancyapps/fancybox/dist/jquery.fancybox');
// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });


const autoNumericOptionsRuble = {
    currencySymbol: "\u202f ₽",
    currencySymbolPlacement: "s",
    decimalCharacterAlternative: ".",
    digitGroupSeparator: " ",
    minimumValue: "0",
    decimalPlaces: "0"
};

$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

    $('.select2').select2({
        theme: 'bootstrap4',
    });

    AutoNumeric.multiple('#priceCarAdvert', autoNumericOptionsRuble);

    $('[data-fancybox="images"]').fancybox({
        thumbs : {
            autoStart : true
        }
    });

    $('.toast').toast('show');


    $('.carAdvertSh').hover(function () {
            $(this).toggleClass('shadow-sm');
    });
});

