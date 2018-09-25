<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('url-shortener', 'LinkController@index')->name('url-shortener');
