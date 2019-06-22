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
Route::get('/', [
    'uses' => 'BlogController@landingPage',
    'as'   => 'landing-page'
]);
Route::get('/services', [
    'uses' => 'BlogController@services',
    'as'   => 'services'
]);

Route::get('/customers', [
    'uses' => 'CustomerController@index',
    'as'   => 'services'
]);
Route::get('/about', [
    'uses' => 'BlogController@about',
    'as'   => 'about'
]);
Route::get('/contact-us', [
    'uses' => 'BlogController@contactUs',
    'as'   => 'contact-us'
]);
Route::get('/create-value', [
    'uses' => 'BlogController@createValue',
    'as'   => 'create-value'
]);
Route::get('/client-login', [
    'uses' => 'BlogController@clientLogin',
    'as'   => 'client-login'
]);
Route::get('/blog', [
    'uses' => 'BlogController@index',
    'as'   => 'blog'
]);

Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as'   => 'category'
]);

Route::get('/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);

Route::get('/tag/{tag}', [
    'uses' => 'BlogController@tag',
    'as'   => 'tag'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as' => 'blog.comments'
]);

Route::auth();

Route::get('/home', 'Backend\HomeController@index');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');

Route::put('/backend/blog/restore/{blog}', [
    'uses' => 'Backend\BlogController@restore',
    'as'   => 'backend.blog.restore'
]);
Route::delete('/backend/blog/force-destroy/{blog}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as'   => 'backend.blog.force-destroy'
]);
Route::resource('/backend/blog', 'Backend\BlogController',['as' =>'backend']);

Route::resource('/backend/categories', 'Backend\CategoriesController',['as' =>'backend']);

Route::get('/backend/users/confirm/{users}', [
    'uses' => 'Backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
]);
Route::resource('/backend/users', 'Backend\UsersController',['as' =>'backend']);
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customers/pdf','CustomerController@export_pdf');
Route::get('customer/pdfexports/{id}','CustomerController@pdfexport');

Route::get('/payments','CustomerController@payments');

Route::resource('/backend/businesstypes', 'Backend\BusinessTypeController',['as' =>'backend']);
Route::resource('/backend/paymentmethods', 'Backend\PaymentMethodController',['as' =>'backend']);
Route::resource('/backend/managecustomers', 'Backend\ManagerCustomerController',['as' =>'backend']);
Route::resource('/backend/managepayments', 'Backend\ManagePaymentController',['as' =>'backend']);
