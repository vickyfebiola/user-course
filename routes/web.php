<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyDataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Data Routes
Route::get('/', [MyDataController::class, 'index'])->name('data.index');
Route::get('/create', [MyDataController::class, 'create'])->name('data.create');
Route::post('/add', [MyDataController::class, 'store'])->name('data.store');
Route::get('/edit/{id}', [MyDataController::class, 'edit'])->name('data.edit');
Route::put('/update/{id}', [MyDataController::class, 'update'])->name('data.update');
Route::get('/delete/{id}', [MyDataController::class, 'delete'])->name('data.delete');

// Soal Routes
Route::get('/soal', [MyDataController::class, 'soal'])->name('soal');
Route::get('/soal/mentor', [MyDataController::class,'countMentor'])->name('soal.mentor');
Route::get('/soal/member', [MyDataController::class, 'countMember'])->name('soal.member');


// Member Routes
Route::get('/members', [MyDataController::class, 'member'])->name('member.index');
Route::get('/members/create', [MyDataController::class, 'create_member'])->name('member.create');
Route::post('/members/add', [MyDataController::class, 'store_member'])->name('member.store');
Route::get('/members/edit/{id_member}', [MyDataController::class, 'edit_member'])->name('member.edit');
Route::put('/members/update/{id_member}', [MyDataController::class, 'update_member'])->name('member.update');
Route::get('/members/delete/{id_member}', [MyDataController::class, 'delete_member'])->name('member.delete');

// Course Routes
Route::get('/courses', [MyDataController::class, 'course'])->name('course.index');
Route::get('/courses/create', [MyDataController::class, 'create_course'])->name('course.create');
Route::post('/courses/add', [MyDataController::class, 'store_course'])->name('course.store');
Route::get('/courses/edit/{id_course}', [MyDataController::class, 'edit_course'])->name('course.edit');
Route::put('/courses/update/{id_course}', [MyDataController::class, 'update_course'])->name('course.update');
Route::get('/courses/delete/{id_course}', [MyDataController::class, 'delete_course'])->name('course.delete');


// Mentor Routes
Route::get('/mentors', [MyDataController::class, 'mentor'])->name('mentor.index');
Route::get('/mentors/create', [MyDataController::class, 'create_mentor'])->name('mentor.create');
Route::post('/mentors/add', [MyDataController::class, 'store_mentor'])->name('mentor.store');
Route::get('/mentors/edit/{id_mentor}', [MyDataController::class, 'edit_mentor'])->name('mentor.edit');
Route::put('/mentors/update/{id_mentor}', [MyDataController::class, 'update_mentor'])->name('mentor.update');
Route::get('/mentors/delete/{id_mentor}', [MyDataController::class, 'delete_mentor'])->name('mentor.delete');
