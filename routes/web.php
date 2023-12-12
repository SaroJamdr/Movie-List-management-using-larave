<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Movie\MovieController;

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
//     return view('welcome');
// });


// Route::get('/',[MovieController::class,'index']);
Route::get('/',[MovieController::class,'list'])->name('list.mv');
Route::get('/addmovie',[MovieController::class,'index'])->name('add.mv');

Route::post('/movie/store',[MovieController::class,'store'])->name('mv.store');

Route::patch('/movie/update/{movie}',[MovieController::class,'update'])->name('mv.update');

Route::get('/movie/delete/{movie}',[MovieController::class,'delete'])->name('mv.delete');

Route::get('/movies',[FrontendController::class,'index'])->name('view.movie');

Route::get('/movie/details/{movie}',[FrontendController::class,'details'])->name('mv.details');