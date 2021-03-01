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

//доступ всем
//основная страница
Route::get('/', function () {
    return view('welcome');
});
//доступ авторизованным пользователям, status >= 1 (обычный или выше)
//функционал на выбор
Route::get('/services', function () {
    return view('services');
})->middleware(['auth', 'default']);
//рассчет количества материалов - начальная страница
Route::get('/services/remont', function () {
    return view('remont');
})->middleware(['auth', 'default']);
//доступ авторизованным пользователям, status >= 2 (премиум или выше)
//сохраненные проекты
Route::get('/projects', function () {
    return view('projects');
})->middleware(['auth', 'premium']);
//доступ авторизованным пользователям, status = 3 (админ)
//функционал администратора
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'admin']);
