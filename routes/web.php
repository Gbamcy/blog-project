<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});
//   admin routes//

Route::get('/admin',[AdminController::class,'admin'])->name('admin.admin');

Route::group(['middleware' => ['web']], function () {

    Auth::routes();



    // pages routes//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile',[PagesController::class,'profile'])->name('profile');
 // contact routes

Route::get('/contact',[FlightController::class,'index'])->name('pages.contact');
Route::post('/contact',[FlightController::class,'store'])->name('contact.store');

// crud routes
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::post('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
// comments routes
Route::post('/comment', [CommentsController::class,'newComment'])->name('Comment');

});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
