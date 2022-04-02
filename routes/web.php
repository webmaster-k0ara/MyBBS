<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class,'index'])
->name('posts.index');
Route::get('/company',[PostController::class,'company'])
->name('member.company');
Route::get('/posts/{post}', [PostController::class,'show'])
->name('posts.show');
Route::get('/company/member/{member}', [PostController::class,'member'])
->name('member.member');
