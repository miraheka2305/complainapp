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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',function (){
    return view( 'auth.login');
});
Route::middleware(['IsAdmin'])->group(function (){
    Route::get('/home-ad','PageController@dashboardadmin')->name('homeadmin');
    Route::get('/create-kategori','KategoriController@create')->name('createkategori');
    Route::get('/edit-kategori','KategoriController@edit')->name('editkategori');
    Route::put('/update-kategori/{id}','KategoriController@update')->name('updatekategori');
    Route::delete('/delete-kategori/{id}','KategoriController@destroy')->name('deletekategori');
    Route::post('/store-kategori','KategoriController@store');
    Route::get('/statistik','PageController@statistic')->name('statistic');
    Route::get('/view-complaint','PageController@complaint')->name('viewcomplaint');
    Route::get('/regis-fl','PageController@regisfreelancer')->name('regisfreelancer');
});
Route::middleware(['IsFreelancer'])->group(function(){
    Route::get('/home-fl','PageController@dashboardfl')->name('homefl');
    Route::get('/new-complaint','PageController@newcomplaint')->name('newcomplaint');
    Route::get('/view-answer','PageController@viewanswer')->name('viewanswer');
    Route::resource('complaints', 'ComplaintController');
});

Route::get('/home-fl','PageController@dashboardfl')->name('homefl')->middleware('IsFreelancer');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/createKategori','KategoriController@create')->name('createKategori');
//Route::post('/storeKategori','KategoriController@store');
