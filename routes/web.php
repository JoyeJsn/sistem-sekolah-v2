<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//manajemen siswa
Route::name('students.')->prefix('students')->group(function() {
    Route::get('/',[StudentController::class, 'index'])->name('students.index');

    Route::get('/{id}', function($id) {
        return 'Menampilkan detail siswa dengan ID: {$id}';
    })->name('students.show');
});

