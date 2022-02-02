<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Post;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\XController;









//Route::get('/', "MainController@index")->name('main.index');
Route::get('/', "MainController@index")->name('main.index');
Route::get('/about', "AboutController@index")->name('about.index');
Route::get('/contacts', "ContactsController@index")->name('contacts.index');

Route::group(['namespace' => 'Post'], function(){
   Route::get('/posts', 'IndexController')->name('post.index');
   Route::get('/posts/create', "CreateController")->name('post.create');
   Route::post('/posts', "StoreController")->name('post.store');
   Route::get('/posts/{post}', "ShowController")->name('post.show');
   Route::get('/posts/{post}/edit', "EditController")->name('post.edit');
   Route::patch('/posts/{post}', "UpdateController")->name('post.update');
   Route::delete('/posts/{post}', "DestroyController")->name('post.delete');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){

   Route::group(['namespace' => 'Post'], function(){
      Route::get('/post', "IndexController")->name('admin.post.index');
   });
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
