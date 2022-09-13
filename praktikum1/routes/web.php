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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
    return view('login');
});



Route::get('/hello', function () {
    // return view('welcome');
    return 'helloword';
});


Route::get('/hello1', function () {
    // return view('welcome');
    echo 'matakuliah web lanjut ';
    echo 'polinema';
});


Route::get('/mahasiswa/{nama}/{alamat}', function ($nama,$alamat) {
    return "tampilkan data mahasiswa bernama $nama dengan alamat $alamat";
});

Route::get('users/{id}', function ($id) {
    return " tampilkan user dengan id =$id";    
})->where('id','[0-9]+'); 

// Route::get('/dosen','DosenController@index'); versi laravel 5

Route::get('/', [App\Http\Controllers\DosenController::class,'index']);
Route::get('/mahasiswa', [App\Http\Controllers\DosenController::class,'tampil']);
Route::get('/biodata', [App\Http\Controllers\DosenController::class,'biodata']);