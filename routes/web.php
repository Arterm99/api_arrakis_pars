<?php

use Illuminate\Support\Facades\Route;

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


// ПОДРОБНЕЕ
// https://developernotes.ru/laravel-5/route-i-routing-v-laravel-5#header6

// Форма Регистрации. Подключение к БД
Route::post('/reg', 'UsersController@submit')->name('reg');

// Форма авторизации
Route::post('/auth', 'UsersController@AuthAdmin')->name('auth');

// Добавление товаров в БД
Route::post('/reg-lc', 'AdminPanelController@admin');

// Выйти из ЛК
Route::get('/exit-admin', 'UsersController@ExitSession');

// Страница Парсинга
Route::get('/lists' ,'ParsingController@parsing')->name('parsing');
// Страница Парсинга
Route::get('parsing', function () {
    return view('parsing');
});


Route::get('test', function () {
    return view('test');
});





Route::get('/', function () {
    return view('index');
})->name('home');

// Личный кабинет
Route::get('/lc', function () {
    return view('lc');
});

Route::get('/product', function () {
    return view('lc');
})->name('lc');

Route::get('/reg-lc', function () {
    return view('lc');
});

Route::get('/inc/aside', function () {
    return view('lc');
});

Route::get('/product/{id}', function () {
    return view('lc');
})->name('product-one');




// j-son 
Route::get('/json-product', 'AdminPanelController@JsonCodeProduct');

// j-son 
Route::get('/json-users', 'UsersController@JsonCodeUsers');


// О компании
Route::get('/about', function () {
    return view('about');
});

