<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:post_slug}', [PostController::class, 'show']);
Route::get('/category/{category:cat_slug}', function (Category $category)
{
    $data['posts'] = $category->posts->load(['category','author']);
    return view('posts.index', $data);
});
