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
    Route::get('/show {id}' , [TeacherController::class, 'show'])->name('show');

    //Halaman tambah siswa
    Route::get('/create' , [TeacherController::class, 'create'])->name('create');

    //Halaman edit siswa
    Route::get('/edit' , [TeacherController::class, 'edit'])->name('edit');

    //Logika tambah siswa
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    //Logika edit siswa
    Route::put('/', [TeacherController::class, 'update'])->name('update');

    //Logika hapus siswa
    Route::delete('/', [TeacherController::class, 'destroy'])->name('destroy');
});

//Student data management (Action Controller)
Route::name('students.')->prefix('students')->group(function() {
    //Halaman daftar siswa
    Route::get('/',[StudentController::class, 'index'])->name('index');

    //Halaman detail siswa
    Route::get('/show {id}' , [StudentController::class, 'show'])->name('show');

    //Halaman tambah siswa
    Route::get('/create' , [StudentController::class, 'create'])->name('create');

    //Halaman edit siswa
    Route::get('/edit' , [StudentController::class, 'edit'])->name('edit');

    //Logika tambah siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    //Logika edit siswa
    Route::put('/', [StudentController::class, 'update'])->name('update');

    //logika hapus siswa
    Route::delete('/', [StudentController::class, 'destroy'])->name('destroy');
});


//Class data management (Invokable)
Route::name('classes.')->prefix('classes')->group(function() {
    //Halaman daftar siswa
    Route::get('/', IndexController::class)->name('index');

    //Halaman detail siswa
    Route::get('/show {id}' , ShowController::class)->name('show');

    //Halaman tambah siswa
    Route::get('/create' , CreateController::class)->name('create');

    //Halaman edit siswa
    Route::get('/edit' , EditController::class)->name('edit');

    //Logika tambah siswa
    Route::post('/', StoreController::class)->name('store');

    //Logika edit siswa
    Route::put('/', UpdateController::class)->name('update');

    //logika hapus siswa
    Route::delete('/', DestroyController::class)->name('destroy');
});

//Major data Manajemen (Resource)
Route::resource('majors', MajorController::class);
