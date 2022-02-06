<?php

use Illuminate\Support\Facades\Route;
use App\Models\Config_Schedule;

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
    if(Config_Schedule::where('code', 'FRP')->first()->status)
        return view('welcome');
    else
        return redirect()->route('sso');
    
});

Auth::routes();

Route::get('/sso', \App\Http\Livewire\Sso::class)->name('sso')->middleware('cas.auth');
Route::get('/home', \App\Http\Livewire\Index::class)->name('home');
Route::get('/user/admin', \App\Http\Livewire\User\Admin\Idx::class)->name('user.admin');
Route::get('/user/profile', \App\Http\Livewire\User\Profile\Idx::class)->name('user.profile');

Route::get('/timetable/subject', \App\Http\Livewire\Timetable\Subject\Idx::class)->name('timetable.subject');
Route::get('/timetable/schedule', \App\Http\Livewire\Timetable\Schedule\Idx::class)->name('timetable.schedule');

Route::get('/user/refresh', function () {
    \Session::flush();
    return redirect('/');
})->name('user.refresh');

