window.$ = window.jQuery = require('jquery');
require('../assets/plugins/bootstrap/dist/js/bootstrap');
require('bootstrap-colorpicker');
require('bootstrap-datepicker');
require('bootstrap-slider');
require('chart.js');
require('ckeditor');
require('datatables.net');
require('datatables.net-bs');
require('fastclick');
require('flot');
// require('../assets/plugins/fontawesome-pro/js/all.min.js');
require('fullcalendar');
require('inputmask');
require('ion-rangeslider');
require('jquery-knob');
require('jquery-sparkline');
require('jquery-ui');
require('jvectormap');
require('moment');
require('morris.js/morris.min.js');
require('pace');
require('raphael');
require('slimscroll');
require('../assets/js/adminlte.min');
require('select2');
require('fastclick');
require('icheck');
// require('../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js');




$(document).ready(function() {
//     //Initialize Select2 Elements
    $('.select2').select2();
//
//     //Datemask dd/mm/yyyy
//     $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
//     //Datemask2 mm/dd/yyyy
//     $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
//     //Money Euro
//     $('[data-mask]').inputmask();
//
//     //Date range picker
//     $('#reservation').daterangepicker();
//     //Date range picker with time picker
//     $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }});
//     //Date range as a button
//     $('#daterange-btn').daterangepicker(
//         {
//             ranges   : {
//                 'Today'       : [moment(), moment()],
//                 'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//                 'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
//                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//                 'This Month'  : [moment().startOf('month'), moment().endOf('month')],
//                 'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
//             },
//             startDate: moment().subtract(29, 'days'),
//             endDate  : moment()
//         },
//         function (start, end) {
//             $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
//         }
//     );
//
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass   : 'iradio_flat-blue'
    });

    //Colorpicker
    $('.my-colorpicker1').colorpicker();
    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    //Timepicker
    // $('.timepicker').timepicker({
    //     showInputs: false
    // });
});