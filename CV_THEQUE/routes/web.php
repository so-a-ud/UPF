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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Students
Route::get('admin/students', [App\Http\Controllers\AdminController::class, 'students'])->name('admin.students')->middleware('is_admin');
Route::get('admin/students/create', [App\Http\Controllers\AdminController::class, 'createStudent'])->name('admin.students.create')->middleware('is_admin');
Route::post('admin/students/store', [App\Http\Controllers\AdminController::class, 'storeStudent'])->name('admin.students.store')->middleware('is_admin');
Route::get('admin/students/edit/{cne}', [App\Http\Controllers\AdminController::class, 'editStudent'])->name('admin.students.edit')->middleware('is_admin');
Route::post('admin/students/update', [App\Http\Controllers\AdminController::class, 'updateStudent'])->name('admin.students.update')->middleware('is_admin');
Route::delete('admin/students/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyStudent'])->name('admin.students.destroy')->middleware('is_admin');

// Recruteurs
Route::get('admin/recruteurs', [App\Http\Controllers\AdminController::class, 'recruteurs'])->name('admin.recruteurs')->middleware('is_admin');
Route::get('admin/recruteurs/create', [App\Http\Controllers\AdminController::class, 'createRec'])->name('admin.recruteurs.create')->middleware('is_admin');
Route::post('admin/recruteurs/store', [App\Http\Controllers\AdminController::class, 'storeRec'])->name('admin.recruteurs.store')->middleware('is_admin');
Route::get('admin/recruteurs/edit/{id}', [App\Http\Controllers\AdminController::class, 'editRec'])->name('admin.recruteurs.edit')->middleware('is_admin');
Route::post('admin/recruteurs/update', [App\Http\Controllers\AdminController::class, 'updateRec'])->name('admin.recruteurs.update')->middleware('is_admin');
Route::delete('admin/recruteurs/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroyRec'])->name('admin.recruteurs.destroy')->middleware('is_admin');

Route::get('student/home', [App\Http\Controllers\HomeController::class, 'StudentHome'])->name('student.home')->middleware('is_student');
Route::post('change-password', [App\Http\Controllers\ChangePasswordController::class,'store'])->name('change.password');
Route::get('change-cv', [App\Http\Controllers\ExperienceProfessionnelleController::class,'index'])->name('cv');