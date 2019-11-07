/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Dropzone from 'dropzone';

const autoNumericOptionsRuble = {
    currencySymbol: "\u202f ₽",
    currencySymbolPlacement: "s",
    decimalCharacterAlternative: ".",
    digitGroupSeparator: " ",
    minimumValue: "0",
    decimalPlaces: "0"
};



$(document).on('click', '.phone-button', function () {
    var button = $('.phone-button');
    var number_block = $('.number-block');
    var button_user_phone = $('.link-user-telephone-car-advert');

    axios.post(button.data('source')).then(function (response) {
        button.find('span').html('+7 ' + response.data).text(function(i, text) {
            return text.replace(/(\d{3})(\d{3})(\d{2})(\d{2})/, '($1) $2-$3-$4');
        });

        // number_block.toggleClass('d-none');
        button.find('span').addClass('font-weight-bold');
        button.find('.fad.fa-phone-alt').hide();

    }).catch(function (error) {
        console.error(error)
    });

//    Phone btn visible
}).on('click', '.btn-phone', function () {
    var button = $('.btn-phone');
    var myModal =  $('#myModal');

    axios.post(button.data('source')).then(function (response) {
        myModal.find('.modal-body > span').html('+7 ' + response.data).text(function(i, text) {
            return text.replace(/(\d{3})(\d{3})(\d{2})(\d{2})/, '($1) $2-$3-$4');
        });
        myModal.modal('show');

    }).catch(function (error) {
        console.error(error)
    });
}).on('click', '.visible-filter', function () {
    var button = $(this);
    var filter_block = $('.filter-header_top');

    if (button.text() === "Показать фильтр") {
        button.text('Скрыть фильтр');
    } else {
        button.text('Показать фильтр')
    }
    filter_block.toggleClass('active');

});

$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

    $('.select2').select2({
        theme: 'bootstrap4'
    });

    setTimeout(function() {
        $('.brand-readme').readmore({
            speed: 200,
            heightMargin: 16,
            collapsedHeight: 160,
            moreLink: '<a href="#">Все параметры <i class="fal fa-chevron-down pl-1"></i></a>',
            lessLink: '<a href="#">Свернуть <i class="fal fa-chevron-up pl-1"></i></a>',
            afterToggle: function(trigger, element, expanded) {
                if(! expanded) { // The "Close" link was clicked
                    $('html, body').animate({scrollTop: $(element).offset().top}, {duration: 100});
                }
            }
        });
    }, 100);

    AutoNumeric.multiple('#priceCarAdvert', autoNumericOptionsRuble);

    $('[data-fancybox="images"]').fancybox({
        thumbs : {
            autoStart : true
        }
    });

    $('.toast').toast('show');

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
                        $('#car_series').attr('disabled', true).empty().prepend('<option value="">— Выберите Серию</option>');
                    } else {
                        $('#car_model').removeAttr("disabled");
                    }
                },
                complete: function(){
                    $('#car_model').attr("disabled");
                    $('#car_series').attr("disabled");
                }

        }); } else {
            $('select[name="car_model"]').empty().prepend('<option value="">— Выберите Модель</option>');
            $('#car_model').attr("disabled");
            $('#car_series').attr("disabled");

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

$(document).ready(function () {
    $('.summernote').summernote({
        height: 200
    });

    $('.my-select').selectpicker();

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        $('.my-select').selectpicker('mobile');
    }

});


Dropzone.options.dropzone = {
    maxFilesize: 12,
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        return time+file.name;
    },
    acceptedFiles: ".jpeg,.jpg,.png",
    addRemoveLinks: false,
    dictDefaultMessage: "Перетащите файлы сюда, чтобы загрузить",
    timeout: 5000,
    success: function(file, response)
    {
        console.log(response);
    },
    error: function(file, response)
    {
        return false;
    }
};
