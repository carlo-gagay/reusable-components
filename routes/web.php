<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\EditTitle;
use App\Http\Livewire\Titles;
use App\Models\TempTitle;
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

Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');

Route::get('/titles', Titles::class)->name('titles')->middleware('auth');

Route::get('/edit-page-audio', function(){
    return view('edit-page-audio');
});

require __DIR__.'/auth.php';
