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


    $('select[name="car_brand"]').on('change', function(){
        var carBrandId = $(this).val();
        if(carBrandId) {
            $.ajax({
                url: '/cabinet/my/cars/create/models/get/'+carBrandId,
                type:"GET",
                dataType:"json",


                success:function(data) {
                    $('select[name="car_model"]').empty().prepend('<option value="">— Выберите модель</option>');
                    $.each(data, function(key, value){
                        $('select[name="car_model"]').append('<option value="'+ key +'">' + value + '</option>');
                    });

                    if(!$.trim(data)) {
                        $('#car_model').attr('disabled', true).empty().prepend('<option value="">— Выберите Модель</option>');
                    } else {
                        $('#car_model').removeAttr("disabled");
                    }
                },
                complete: function(){
                    $('#car_model').attr("disabled");
                }

        }); } else {
            $('select[name="car_model"]').empty().prepend('<option value="">— Выберите Модель</option>');
            $('#car_model').attr("disabled");
        }

    });

    $('select[name="car_model"]').on('change', function(){
        var carModelId = $(this).val();
        if(carModelId) {
            $.ajax({
                url: '/cabinet/my/cars/create/models/get/'+carModelId,
                type:"GET",
                dataType:"json",

                success:function(data) {

                    $('select[name="car_series"]').empty().prepend('<option value="">— Выберите серию</option>');

                    $.each(data, function(key, value){
                        $('select[name="car_series"]').append('<option value="'+ key +'">' + value + '</option>');
                    });

                    if(!$.trim(data)) {
                        $('#car_series').attr('disabled', true).empty().prepend('<option value="">— Выберите серию</option>');
                    } else {
                        $('#car_series').removeAttr("disabled");
                    }

                },
                complete: function(){
                    $('#car_series').attr("disabled");
                }

            });
        } else {
            $('select[name="car_series"]').empty().prepend('<option value="">— Выберите серию</option>');
            $('#car_series').attr("disabled");
        }

    });
});

