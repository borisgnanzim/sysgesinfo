<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController ;
use App\Http\Controllers\ArticleController ;

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

// Route::get('/', function () {
//      return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/base', function () {
//     return view('NiceAdmin/base');
// })->name('dashbord');

Route::get('/app',function(){
    return view('layouts/app');
});

// Route::get('/',function(){
//     return view('layouts/app');
// });

Route::get('/logi', function () {
    return view('NiceAdmin/pages-login');
})->name('logi');

Route::get('/base', [App\Http\Controllers\BaseController::class, 'index'])->name('base');

//Route::resource('agences',AgenceController::class);

Route::resource('articles',ArticleController::class);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);

// 
Route::get('/canaux', [App\Http\Controllers\CanalController::class, 'index'])->name('canaux.index') ;

Route::get('/canaux/{canal}/articles',[ArticleController::class, 'indexAc'])->name('articles.indexAc');
 
