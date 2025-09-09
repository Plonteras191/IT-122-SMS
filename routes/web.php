<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\GradesController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/departments', [DepartmentsController::class, 'index']);
Route::get('/faculty', [FacultyController::class, 'index']);
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/subjects', [SubjectsController::class, 'index']);
Route::get('/grades', [GradesController::class, 'index']);
