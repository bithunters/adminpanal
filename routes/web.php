<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('employee/create');


});
route::get('/sent','employeeController@gethome');






Route::get('/approved', function () {
    return view('employee/leaves/approved');
});

Route::get('/rejected', function () {
    return view('employee/leaves/rejected');
});

Route::get('/pending', function () {
    return view('employee/leaves/pending');
});

Route::get('/profile', function () {
    return view('employee/profile');
});

Route::get('/setting', function () {
    return view('employee/setting');
});

Route::get('/create_account', function () {
    return view('create_account');
});

Route::get('/reset', function () {
    return view('employee/password_reset');
});

route::post('/add',['uses'=>'employeeController@store']);

route::post('/go',['uses'=>'employeeController@come']);

route::get('leaves','employeeController@show');


Auth::routes();




