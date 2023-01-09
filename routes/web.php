<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SettingController;
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

Route::get('/', fn () => view('static.about'));

Route::get('/about', fn () => view('static.about'));

Route::get('/service', fn () => view('static.service'));

Route::get('/fee', fn () => view('static.fee'));

Route::get('/map', fn () => view('static.map'));

Route::get('/mail', fn () => view('static.mail'));

Route::get('/blogs', [Controller::class, 'blogs']);

Route::get('/tags/{tag}', [Controller::class, 'tags']);

Route::get('/blog/{id}', [Controller::class, 'blog']);

Route::group([
    'prefix' => '/setting',
    'middleware' => 'auth.basic',
], function () {
    Route::get('/tags/{tag?}', [SettingController::class, 'viewTags']);

    Route::post('/tags/{tag?}', [SettingController::class, 'saveTags']);

    Route::delete('/tags/{tag}', [SettingController::class, 'deleteTags']);

    Route::get('/', [SettingController::class, 'viewBlogs']);

    Route::get('/blog/{id}', [SettingController::class, 'viewBlog']);

    Route::put('/blog/{id}', [SettingController::class, 'publishBlog']);

    Route::get('/blog/{id}/edit', [SettingController::class, 'editBlog']);

    Route::post('/blog/{id}/edit', [SettingController::class, 'saveBlog']);

    Route::delete('/blog/{id}', [SettingController::class, 'deleteBlog']);
});
