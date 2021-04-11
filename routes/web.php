<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function () {
    return view('user');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('post/add', function() {
    DB::table('posts')->insert([
        'title' => 'SDU',
        'body' => 'Kaskelen'
    ]);
});

Route::get('post', [BlogController::class, 'index']);
Route::get('blog/create', function() {
   return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::get('/{lang}', function ($lang){
    App::setlocale($lang);
    return view('home');
});