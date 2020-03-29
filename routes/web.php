<?php
Route::get('/','PagesController@index');

 Route::get('/about',"PagesController@about");

 Route::get('/contact',"PagesController@contact");

 Route::get('/tournament',"PagesController@tournament");
