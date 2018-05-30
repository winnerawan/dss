<?php

Route::get('/home', 'AdminAuth\DashboardController@dashboard')->name('home');

Route::resource('/dosen', 'AdminAuth\DosenController');

Route::resource('/kriteria', 'AdminAuth\KriteriaController');

Route::resource('/hitung', 'AdminAuth\NilaiController');

Route::get('/ranks', 'AdminAuth\RankController@ranks');

Route::resource('/subkriteria', 'AdminAuth\SubKriteriaController');

Route::get('/tes/{key}', 'AdminAuth\RankController@getStatus');

Route::get('/tess', 'AdminAuth\RankController@getSortTotalByDesc');

