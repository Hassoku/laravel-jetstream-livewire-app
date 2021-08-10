<?php

use App\Http\Livewire\Crud;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/pages', function () {
    return view('pages');
})->name('pages');

Route::middleware(['auth:sanctum', 'verified'])->get('/posts', function () {
    return view('posts');
})->name('posts');

Route::middleware(['auth:sanctum', 'verified'])->get('/category', function () {
    return view('category');
})->name('category');

Route::middleware(['auth:sanctum', 'verified'])->get('/settings', function () {
    return view('settings');
})->name('settings');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pages', function () {
        return view('pages');
    })->name('pages');

    Route::get('/posts', function () {
        return view('posts');
    })->name('posts');

    Route::middleware(['auth:sanctum', 'verified'])->get('/category', function () {
        return view('category');
    })->name('category');
    
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
       

});



Route::get('students', Crud::class);
Route::get('admin', Dashboard::class);

