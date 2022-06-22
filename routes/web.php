<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\News;
use App\Http\Controllers\Comments;
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


Route::resource('/', News::class);
Route::post('comment', [Comments::class, 'store'])->name('comment');
Route::post('fakerCreate', [News::class, 'fakerCreate'])->name('fakerCreate');
