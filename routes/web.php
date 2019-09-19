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
//Login
Route::get('/', function () {
    return view('auths.login');
});

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

// Route::get('/user', function () {
//     return view('user');
// });

// Route::get('about', function () {
//     $nama = 'IMP Studio';
//     return view('about', ['nama' => $nama]);
// });

// Route::get('mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::get('/', 'PagesController@home');

//Mahasiswa
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');

Route::patch('/students/{student}', 'StudentsController@update');

//Agenda
Route::get('/agendas', 'AgendasController@index');
Route::get('/agendas/create', 'AgendasController@create');
Route::get('/agendas/{agenda}', 'AgendasController@show');
Route::post('/agendas', 'AgendasController@store');
Route::get('/agendas/{id}/delete', 'AgendasController@delete');
Route::get('/agendas/{agenda}/edit', 'AgendasController@edit');
Route::patch('/agendas/{agenda}', 'AgendasController@update');
