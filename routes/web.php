<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageReactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\TicketController;
use App\Models\MessageReaction;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::post('/ticket', [TicketController::class, 'store'])->name('ticket.buy');
Route::get('/thread', [ThreadController::class, 'index'])->name('thread');
Route::post('/thread', [ThreadController::class, 'store'])->name('thread.replay');
Route::get('/message', [MessageController::class, 'index'])->name('message');
Route::post('/message', [MessageController::class, 'store'])->name('data');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/reply', [MessageReactionController::class, 'index'])->name('reply.message');

Route::group(['prefix' => 'admin'],function (){

    Route::get('profile', [AdminController::class, 'show'])->name('admin.profile')->middleware('auth.admin');

    Route::group(['prefix' => 'auth'], function (){

        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
        Route::post('login', [AdminController::class, 'store']) ->name('admin');
        
    }); 
});
require __DIR__.'/auth.php';
