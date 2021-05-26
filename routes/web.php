<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/sockets', function () {
    return view('sockets.index');
})->name('sockets.index');
Route::get('/sockets/chat', function () {
    return view('sockets.chat');
})->name('sockets.chat');
Route::get('/sockets/echo', function () {
    return view('sockets.echo');
})->name('sockets.echo');
Route::get('/sockets/new', function () {
    \App\Events\MyEvent::dispatch('New User: ' . \Carbon\Carbon::now()->toString());
    return response()->json(['ok']);
})->name('sockets.new');

require __DIR__.'/auth.php';
