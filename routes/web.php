<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
 
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

  //getting roles data
  Route::get('/role-user', 'Admin\DashboardController@user');
  Route::delete('user-edit/{id}', 'Admin\DashboardController@deleteuser');
  Route::get('/user-edit/{id}', 'Admin\DashboardController@useredit');
  //PUT method for updates
  Route::put('/role-user-update/{id}', 'Admin\DashboardController@userupdate');
 
});


