<?php

Route::get('/home', 'AdminAuth\DashboardController@dashboard')->name('home');

Route::resource('/dosen', 'AdminAuth\DosenController');

Route::resource('/kriteria', 'AdminAuth\KriteriaController');

Route::resource('/subkriteria', 'AdminAuth\SubKriteriaController');