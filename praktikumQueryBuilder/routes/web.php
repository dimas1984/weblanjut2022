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

// Route::get('/', [App\Http\Controllers\DosenController::class,'index']);
Route::get('/mahasiswa', [App\Http\Controllers\DosenController::class,'tampil']);
Route::get('/biodata', [App\Http\Controllers\DosenController::class,'biodata']);

// praktikum model
Route::get('/', [App\Http\Controllers\MahasiswaController::class,'index']);
Route::get('/insert', [App\Http\Controllers\MahasiswaController::class,'insert']);
Route::get('/insert-banyak', [App\Http\Controllers\MahasiswaController::class,'insertBanyak']);
Route::get('/update', [App\Http\Controllers\MahasiswaController::class,'update']);
Route::get('/update-where', [App\Http\Controllers\MahasiswaController::class,'updatewhere']);
Route::get('/update-or-insert', [App\Http\Controllers\MahasiswaController::class,'updateOrInsert']);
Route::get('/delete', [App\Http\Controllers\MahasiswaController::class,'delete']);
Route::get('/get', [App\Http\Controllers\MahasiswaController::class,'get']);
Route::get('/get-tampil', [App\Http\Controllers\MahasiswaController::class,'getTampil']);
Route::get('/get-view', [App\Http\Controllers\MahasiswaController::class,'getView']);
Route::get('/get-where', [App\Http\Controllers\MahasiswaController::class,'getWhere']);
Route::get('/select', [App\Http\Controllers\MahasiswaController::class,'select']);
Route::get('/take', [App\Http\Controllers\MahasiswaController::class,'take']);
Route::get('/first', [App\Http\Controllers\MahasiswaController::class,'first']);
Route::get('/find', [App\Http\Controllers\MahasiswaController::class,'find']);
Route::get('/raw', [App\Http\Controllers\MahasiswaController::class,'raw']);

