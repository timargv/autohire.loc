<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/{user}', 'Cabinet\ProfileController@show')->name('profile.show');
});

Route::group(['prefix'=> 'cars', 'as' => 'cars.adverts.', 'namespace' => 'CarAdverts'], function () {
//    Route::get('/all', 'AdvertController@index')->name('index');
//    Route::get('/{carBrand}/all', 'AdvertController@carBrand')->name('brand');
    Route::get('/show/{carAdvert}', 'AdvertController@show')->name('show');
    Route::post('/show/{carAdvert}/phone', 'AdvertController@phone')->name('phone');
    Route::post('/show/{carAdvert}/favorites', 'FavoriteController@add')->name('favorites');
    Route::delete('/show/{carAdvert}/favorites', 'FavoriteController@remove');

    Route::get('/{adverts_path?}', 'AdvertController@index')->name('index')->where('adverts_path', '.+');

});


// ---------- Cabinet
Route::group(['prefix' => 'cabinet', 'as' => 'cabinet.', 'namespace' => 'Cabinet', 'middleware' => ['auth'] ], function () {

        Route::get('/', 'HomeController@index')->name('home');

        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::get('/', 'ProfileController@index')->name('home');
            Route::get('/edit', 'ProfileController@edit')->name('edit');
            Route::put('/update', 'ProfileController@update')->name('update');
            Route::post('/{user}/avatar', 'ProfileController@avatar')->name('add.avatar');

            Route::post('/phone', 'PhoneController@request');
            Route::get('/phone', 'PhoneController@form')->name('phone');
            Route::put('/phone', 'PhoneController@verify')->name('phone.verify');

            Route::post('/phone/auth', 'PhoneController@auth')->name('phone.auth');
        });


        Route::group(['prefix' => 'black-list', 'as' => 'black.list.tenants.', 'namespace' => 'BlackList'], function () {
            Route::get('/tenants', 'TenantsController@index')->name('home');
            Route::get('/create', 'TenantsController@create')->name('create');
            Route::post('/story', 'TenantsController@story')->name('story');
            Route::get('/{tenant}/show', 'TenantsController@show')->name('show');
            Route::get('/edit', 'TenantsController@edit')->name('edit');
            Route::put('/update', 'TenantsController@update')->name('update');

            Route::post('/{tenant}/photo', 'TenantsController@addPhoto')->name('add.photo');
        });


        Route::get('favorites', 'FavoriteController@index')->name('favorites.index');
        Route::delete('favorites/{carAdvert}', 'FavoriteController@remove')->name('favorites.remove');
//
//        Route::resource('tickets', 'TicketController')->only(['index', 'show', 'create', 'store', 'destroy']);
//        Route::post('tickets/{ticket}/message', 'TicketController@message')->name('tickets.message');

        Route::group(['prefix' => 'my/cars', 'as' => 'adverts.', 'namespace' => 'Adverts',], function () {
            Route::get('/', 'AdvertController@index')->name('index');

            Route::get('/create/models/get/{id}', 'AdvertController@getModels');

            Route::get('/create', 'AdvertController@create')->name('create');
            Route::post('/create/advert', 'AdvertController@store')->name('create.advert.store');
            Route::get('/{carAdvert}', 'AdvertController@show')->name('show');
            Route::get('/{carAdvert}/edit', 'AdvertController@edit')->name('edit');
            Route::put('/{carAdvert}/update', 'AdvertController@update')->name('update');
            Route::post('/{carAdvert}/send', 'AdvertController@send')->name('send');
            Route::post('/{carAdvert}/close', 'AdvertController@close')->name('close');
            Route::delete('/{carAdvert}/destroy', 'AdvertController@destroy')->name('destroy');


            Route::get('/{carAdvert}/photos', 'AdvertController@photosForm')->name('photos');
            Route::post('/{carAdvert}/photos', 'AdvertController@photos');

            Route::get('/{carAdvert}/photo/{photo}/main', 'AdvertController@mainPhoto')->name('main.photo');
            Route::delete('/{carAdvert}/{photo}/destroy', 'AdvertController@destroyPhoto')->name('delete.photo');


//            Route::get('/{advert}/edit', 'ManageController@editForm')->name('edit');
//            Route::put('/{advert}/edit', 'ManageController@edit');
//            Route::get('/{advert}/photos', 'ManageController@photosForm')->name('photos');
//            Route::post('/{advert}/photos', 'ManageController@photos');
//            Route::get('/{advert}/attributes', 'ManageController@attributesForm')->name('attributes');
//            Route::post('/{advert}/attributes', 'ManageController@attributes');
//            Route::post('/{advert}/send', 'ManageController@send')->name('send');
//            Route::post('/{advert}/close', 'ManageController@close')->name('close');
//            Route::delete('/{advert}/destroy', 'ManageController@destroy')->name('destroy');
        });

//        Route::group([
//            'prefix' => 'banners',
//            'as' => 'banners.',
//            'namespace' => 'Banners',
//            'middleware' => [App\Http\Middleware\FilledProfile::class],
//        ], function () {
//            Route::get('/', 'BannerController@index')->name('index');
//            Route::get('/create', 'CreateController@category')->name('create');
//            Route::get('/create/region/{category}/{region?}', 'CreateController@region')->name('create.region');
//            Route::get('/create/banner/{category}/{region?}', 'CreateController@banner')->name('create.banner');
//            Route::post('/create/banner/{category}/{region?}', 'CreateController@store')->name('create.banner.store');
//
//            Route::get('/show/{banner}', 'BannerController@show')->name('show');
//            Route::get('/{banner}/edit', 'BannerController@editForm')->name('edit');
//            Route::put('/{banner}/edit', 'BannerController@edit');
//            Route::get('/{banner}/file', 'BannerController@fileForm')->name('file');
//            Route::put('/{banner}/file', 'BannerController@file');
//            Route::post('/{banner}/send', 'BannerController@send')->name('send');
//            Route::post('/{banner}/cancel', 'BannerController@cancel')->name('cancel');
//            Route::post('/{banner}/order', 'BannerController@order')->name('order');
//            Route::delete('/{banner}/destroy', 'BannerController@destroy')->name('destroy');
//        });
    }
);



// ---------- ADMIN

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] ], function () {

//        Route::post('/ajax/upload/image', 'UploadController@image')->name('ajax.upload.image');

        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('users', 'UsersController');


        // USER
        Route::group(['prefix' => 'user', 'as' => 'users.', 'namespace' => 'User'], function () {
            Route::resource('groups', 'GroupsController');
        });

        // VERIFICATION USER
        Route::post('/users/{user}/verify', 'UsersController@verify')->name('users.verify');

        // VERIFIED OWNER
        Route::post('/users/{user}/verify-owner', 'UsersController@verifyOwner')->name('users.verify_owner');



        // AVATARS
        Route::group(['prefix' => 'user/avatars', 'as' => 'users.avatar.', 'namespace' => 'User'], function () {
            Route::get('/', 'AvatarsController@index')->name('home');

            Route::post('/not-match/{avatar}', 'AvatarsController@notMatch')->name('not.match');
            Route::post('/active/{avatar}', 'AvatarsController@active')->name('active');
        });


        // Чёрный список арендателей
        Route::group(['prefix' => 'black-list/tenants', 'as' => 'black.list.tenants.', 'namespace' => 'BlackList'], function () {
            Route::resource('/', 'TenantsController');
            Route::resource('/comments', 'TenantCommentsController');
            Route::resource('/photos', 'TenantPhotosController');


            Route::post('/story', 'TenantsController@story')->name('story');

            Route::get('/{tenant}', 'TenantsController@show')->name('show');


            Route::post('/not-match/{tenant}', 'TenantsController@notMatch')->name('not.match');
            Route::post('/active/{tenant}', 'TenantsController@active')->name('active');

            Route::post('/photo/not-match/{photo}', 'TenantPhotosController@notMatch')->name('photo.not.match');
            Route::post('/photo/active/{photo}', 'TenantPhotosController@active')->name('photo.active');

            Route::post('/comment/not-match/{comment}', 'TenantCommentsController@notMatch')->name('comment.not.match');
            Route::post('/comment/active/{comment}', 'TenantCommentsController@active')->name('comment.active');
        });



        // CATEGORIES (car models, years)
        Route::group(['as' => 'categories.', 'namespace' => 'Category'], function () {
            Route::get('/categories', 'HomeController@index')->name('home');

            Route::group(['prefix' => 'car', 'as' => 'car.', 'namespace' => 'Car'], function () {

                Route::resource('brands', 'CarBrandsController');
                Route::get('/brands/create/{carBrand?}', 'CarBrandsController@create')->name('brands.create');
                Route::delete('/brands/{carBrand}/destroy', 'CarBrandsController@destroy')->name('brands.destroy');

                Route::resource('years', 'YearsController');
                Route::resource('attributes', 'AttributesController');

            });


            Route::group(['prefix' => 'car/{carBrand}', 'as' => 'car.brand.', 'namespace' => 'Car'], function () {
                Route::post('/first', 'CarBrandsController@first')->name('first');
                Route::post('/up', 'CarBrandsController@up')->name('up');
                Route::post('/down', 'CarBrandsController@down')->name('down');
                Route::post('/last', 'CarBrandsController@last')->name('last');
            });

            Route::group(['prefix' => 'car/{year}', 'as' => 'car.year.', 'namespace' => 'Car'], function () {
                Route::post('/first', 'CarBrandsController@first')->name('first');
                Route::post('/up', 'CarBrandsController@up')->name('up');
                Route::post('/down', 'CarBrandsController@down')->name('down');
                Route::post('/last', 'CarBrandsController@last')->name('last');
            });

        });



        Route::group(['prefix' => 'cars-adverts', 'as' => 'cars.adverts.', 'namespace' => 'CarAdvert'], function () {

                Route::get('/', 'AdvertController@index')->name('index');
//                Route::get('/{carAdvert}/edit', 'AdvertController@editForm')->name('edit');
//                Route::put('/{carAdvert}/edit', 'AdvertController@edit');
//                Route::get('/{carAdvert}/photos', 'AdvertController@photosForm')->name('photos');
//                Route::post('/{carAdvert}/photos', 'AdvertController@photos');
//                Route::get('/{carAdvert}/attributes', 'AdvertController@attributesForm')->name('attributes');
//                Route::post('/{carAdvert}/attributes', 'AdvertController@attributes');
                Route::post('/{carAdvert}/send', 'AdvertController@send')->name('send');
                Route::post('/{carAdvert}/moderate', 'AdvertController@moderate')->name('moderate');
                Route::get('/{carAdvert}/reject', 'AdvertController@rejectForm')->name('reject');
                Route::post('/{carAdvert}/reject', 'AdvertController@reject');
                Route::delete('/{carAdvert}/destroy', 'AdvertController@destroy')->name('destroy');

        });

    }
);
