<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentMemberController;

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

Route::get('/posts-{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

Route::patch('/posts-{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

Route::delete('/posts-{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');

Route::post('/posts-{post}/comments', [CommentController::class, 'store'])
    ->name('comments.store')
    ->where('comments', '[0-9]+');

Route::delete('/comments/{comment}/destroy', [CommentController::class, 'destroy'])
    ->name('comments.destroy')
    ->where('comment', '[0-9]+');

// /member

Route::get('/company', [PostController::class, 'company'])
    ->name('company');

Route::get('/company/member-no{member}', [PostController::class, 'member'])
    ->name('member.member')
    ->where('member', '[0-9]+');

Route::get('/company/member/create', [PostController::class, 'createMember'])
    ->name('member.createMember');

Route::post('/company/member/posts/store', [PostController::class, 'storeMember'])
    ->name('member.storeMember');

Route::get('/company/member-no{member}/edit', [PostController::class, 'editMember'])
    ->name('member.editMember')
    ->where('member', '[0-9]+');

Route::patch('/company/member-no{member}/update', [PostController::class, 'updateMember'])
    ->name('member.updateMember')
    ->where('member', '[0-9]+');

Route::delete('/company/member-no{member}/destroy', [PostController::class, 'destroyMember'])
    ->name('member.destroyMember')
    ->where('member', '[0-9]+');

Route::post('/company/member-no{member}/comments', [CommentMemberController::class, 'storeMember'])
    ->name('comments.storeMember')
    ->where('comments', '[0-9]+');

Route::delete('/company/comments/member-no{commentMember}/destroy', [CommentMemberController::class, 'destroyMemberComment'])
    ->name('commentsmember.destroy')
    ->where('commentMember', '[0-9]+');
