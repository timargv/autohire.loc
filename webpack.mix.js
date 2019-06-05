const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// mix.styles([
//     'resources/assets/admin/bootstrap/css/bootstrap.min.css',
//     // 'resources/assets/admin/ionicons/2.0.1/css/ionicons.min.css',
//     'resources/assets/admin/plugins/iCheck/minimal/_all.css',
//     'resources/assets/admin/plugins/datepicker/datepicker3.css',
//     'resources/assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css',
//     'resources/assets/admin/plugins/select2/select2.min.css',
//     'resources/assets/admin/plugins/datatables/dataTables.bootstrap.css',
//     'resources/assets/admin/dist/css/AdminLTE.css',
//     'resources/assets/admin/dist/css/skins/_all-skins.min.css',
//     'resources/assets/admin/dist/css/style.less'
// ], 'public/css/admin.css').sass('resources/sass/plug.scss', 'public/css/plug').version();



// mix.scripts([
//     'resources/assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
//     'resources/assets/admin/bootstrap/js/bootstrap.min.js',
//     'resources/assets/admin/plugins/select2/select2.full.min.js',
//     'resources/assets/admin/plugins/datepicker/bootstrap-datepicker.js',
//     'resources/assets/admin/plugins/datatables/jquery.dataTables.min.js',
//     'resources/assets/admin/plugins/datatables/dataTables.bootstrap.min.js',
//     'resources/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
//     'resources/assets/admin/plugins/fastclick/fastclick.js',
//     'resources/assets/admin/plugins/iCheck/icheck.min.js',
//     'resources/assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.js',
//     // 'resources/assets/admin/plugins/input-mask/jquery.inputmask.bundle.min.js',
//     // 'resources/assets/admin/plugins/input-mask/jquery.inputmask.phone.extensions.js',
//     // 'resources/assets/admin/plugins/input-mask/jquery.inputmask.regex.extensions.js',
//     // 'resources/assets/admin/plugins/input-mask/jquery.inputmask.numeric.extensions.js',
//     'resources/assets/admin/plugins/input-mask/jquery.maskMoney.min.js',
//     // 'resources/assets/admin/plugins/input-mask/jquery.inputmask.extensions.js',
//     'node_modules/autonumeric/dist/autoNumeric.min.js',
//     'node_modules/jquery-slugify/dist/slugify.min.js',
//     'node_modules/speakingurl/speakingurl.min.js',
//
//     'resources/assets/admin/dist/js/adminlte.js',
//     'resources/assets/admin/dist/js/scripts.js',
//     'resources/assets/admin/dist/js/ajax.js'
//
// ], 'public/js/admin.js').version();
//
// mix.copy('resources/assets/admin/bootstrap/fonts', 'public/fonts');
// mix.copy('resources/assets/admin/dist/fonts', 'public/fonts');
// mix.copy('resources/assets/admin/dist/img', 'public/img');
// mix.copy('resources/assets/admin/plugins/iCheck/minimal/blue.png', 'public/css');