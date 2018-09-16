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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('items', 'ItemController');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('customers', 'CustomerController')->except(['create']);
    Route::resource('orders', 'OrderController');
    Route::resource('invoices', 'InvoiceController')->except(['create', 'edit']);

    Route::get('searchcustomer', 'CustomerController@search');
    Route::get('searchitem', 'ItemController@search');
    Route::get('searchorder', 'OrderController@search');
    Route::get('searchrole', 'RoleController@search');
    Route::get('searchuser', 'UserController@search');
    Route::get('searchinvoice', 'InvoiceController@search');
});

Route::resource('items', 'ItemController')->only(['show']);
Route::resource('orders', 'OrderController')->only(['create']);
Route::resource('orders', 'OrderController')->only(['store']);
Route::resource('invoices', 'InvoiceController')->only(['show']);
