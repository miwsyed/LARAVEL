<?php

Route::get('/', function () {
    return view('welcome');
});
 Route::view('/user',"ca");
 Route::post('/controller',"Sub@submit");
