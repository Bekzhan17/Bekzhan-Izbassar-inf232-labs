<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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

Route::get('/home', function () {
    return "home";
});

Route::get('/project', function () {
    return view('project');
});

Route::get('post/add', function() {
    DB::table('posts')->insert([
        'id' => 190103082,
        'title' => 'SDU',
        'body' => 'Kaskelen',
        'timestamps' => 17
    ]);
});

Route::get('post', function() {
    $posts = Post::find(190103082);
    return $posts->timestamps;
});