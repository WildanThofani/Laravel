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
    echo "paman gober";
});

Route::get('/lemot', function () {
    echo "kenapa lemot";
});

Route::get('/home', function () {
    echo "disini omah";
});

Route::get('/sama', function () {
    return "sama saja sami mawon omah";
});

Route::get('/home', function () {
    return "sama saja sami mawon omah";
});

Route::get('/pohong', function () {
    return view ('telo');
});

//pakai kontroller
Route::get('/terong', 'CapungController@index');

//memanggil controller
//capung dengan fungsi pujangga
Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

//sekarang bikin route untuk customer
//Route::get('/Customer', 'CustomerController@index');

//sekarang bikin route untuk add customer
//Route::get('/Customer/create', 'CustomerController@create');

//untuk store dari customer
//Route::get('/Customer/store', 'CustomerController@store');

Route::resource('Customer', 'CustomerController');

//sekarang bikin route untuk supplier
//Route::get('/Supplier', 'SupplierController@index');

Route::resource('Supplier', 'SupplierController');

Route::resource('Employee', 'EmployeeController');



