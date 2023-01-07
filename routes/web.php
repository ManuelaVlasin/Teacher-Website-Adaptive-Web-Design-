<?php

use App\Http\Livewire\Pages\ContactPage\Contact;
use App\Http\Livewire\Pages\CoursePage\Course;
use App\Http\Livewire\Pages\HomePage\Home;
use App\Http\Livewire\Pages\PersonalInfoPage\PersonalInfo;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [Home::class, '__invoke'])->name('home');
Route::get('/contact', [Contact::class, '__invoke'])->name('contact');
Route::get('/personal-info', [PersonalInfo::class, '__invoke'])->name('personal-info');
Route::get('/course/{courseId}', [Course::class, '__invoke'])->name('course');
