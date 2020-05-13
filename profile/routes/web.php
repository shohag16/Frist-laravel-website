<?php

use Illuminate\Support\Facades\Route;

Route::get('/','SiteController@Home');
Route::get('/about','SiteController@About');

Route::get('/service','SiteController@Service');

Route::get('/portfolio','SiteController@portfolio');
