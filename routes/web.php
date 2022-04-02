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

// /posts

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts-{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

// /member

Route::get('/company', [PostController::class, 'company'])
    ->name('company');

Route::get('/company/member-no{member}', [PostController::class, 'member'])
    ->name('member.member')
    ->where('member','[0-9]+');

Route::get('/company/member/create', [PostController::class, 'createMember'])
    ->name('member.createMember');

Route::post('/company/member/posts/store', [PostController::class, 'storeMember'])
    ->name('member.storeMember');
