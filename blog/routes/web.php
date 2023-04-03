<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminBlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'blogIndex'])->name('HomeBlog');
Route::get('/image-page', [HomeController::class, 'imageIndex'])->name('HomeImage');


Route::post('/add-blog-comment/{id}', [HomeController::class, 'createBlogComment'])->name('addblogComment');
Route::post('/add-image-comment/{id}', [HomeController::class, 'createImageComment'])->name('addImageComment');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.home.index');


})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/add-post', [AdminHomeController::class, 'postIndex'])->name('add.post');
    Route::get('/add-image', [AdminHomeController::class, 'imgeIndex'])->name('add.image');

    Route::post('/post-create', [AdminBlogController::class, 'createPost'])->name('post.create');
    Route::post('/image-create', [AdminBlogController::class, 'createImage'])->name('image.create');


});

require __DIR__.'/auth.php';
