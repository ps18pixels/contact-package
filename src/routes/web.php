<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Arkal\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('send-mail', 'ContactController@send')->name('sendMail');
});

