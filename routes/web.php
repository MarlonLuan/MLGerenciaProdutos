<?php

Route::group(['namespace' => ucfirst('Site')], function () {
    Route::get('contato', 'SiteController@contato')->name('site.contato');
    Route::get('sobre', 'SiteController@sobre')->name('site.sobre');
    Route::get('welcome' . '/{name?}', 'SiteController@welcome')->name('site.welcome');
    Route::get('', 'SiteController@index')->name('site.index');
});