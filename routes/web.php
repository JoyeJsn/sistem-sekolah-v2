<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\MajorController;

Route::get('/', function () {
    return view('welcome');
});

//Teacher data management (Action Controller)
Route::name('teachers.')->prefix('teachers')->group(function() {
    //Halaman daftar siswa
    Route::get('/',[TeacherController::class, 'index'])->name('index');

    //Halaman detail siswa
    Route::get('/{id}' , [TeacherController::class, 'show'])->name('show')->whereNumber('id');

    //Halaman tambah siswa
    Route::get('/create' , [TeacherController::class, 'create'])->name('create');

    //Halaman edit siswa
    Route::get('/{id}/edit' , [TeacherController::class, 'edit'])->name('edit');

    //Logika tambah siswa
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    //Logika edit siswa
    Route::put('/{id}/update', [TeacherController::class, 'update'])->name('update');

    //Logika hapus siswa
    Route::delete('/{id}/destroy', [TeacherController::class, 'destroy'])->name('destroy');
});

//Student data management (Action Controller)
Route::name('students.')->prefix('students')->group(function() {
    //Halaman daftar siswa
    Route::get('/',[StudentController::class, 'index'])->name('index');

    //Halaman detail siswa
    Route::get('/{id}' , [StudentController::class, 'show'])->name('show')->whereNumber('id');

    //Halaman tambah siswa
    Route::get('/create' , [StudentController::class, 'create'])->name('create');

    //Halaman edit siswa
    Route::get('/{id}/edit' , [StudentController::class, 'edit'])->name('edit');

    //Logika tambah siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    //Logika edit siswa
    Route::put('/{id}/update', [StudentController::class, 'update'])->name('update');

    //logika hapus siswa
    Route::delete('/{id}/destroy', [StudentController::class, 'destroy'])->name('destroy');
});


//Class data management (Invokable)
Route::name('classes.')->prefix('classes')->group(function() {
    //Halaman daftar siswa
    Route::get('/', IndexController::class)->name('index');

    //Halaman detail siswa
    Route::get('/{id}' , ShowController::class)->name('show')->whereNumber('id');

    //Halaman tambah siswa
    Route::get('/create' , CreateController::class)->name('create');

    //Halaman edit siswa
    Route::get('/{id}/edit' , EditController::class)->name('edit');

    //Logika tambah siswa
    Route::post('/', StoreController::class)->name('store');

    //Logika edit siswa
    Route::put('/{id}/update', UpdateController::class)->name('update');

    //logika hapus siswa
    Route::delete('/{id}/destroy', DestroyController::class)->name('destroy');
});

//Major data Manajemen (Resource)
Route::resource('majors', MajorController::class);

