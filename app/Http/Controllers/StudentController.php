<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Agus',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Wudi',
                'class' => 'XII TKJ 1',
                'major' => 'PM'
            ],
            [
                'id' => 3,
                'nis' => '22100003',
                'name' => 'Jonhy',
                'class' => 'XII TKJ 2',
                'major' => 'AKL'
            ],
        ];


        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show()
    {
        $title = "Catat Siswa Baru - Sistem Sekolah";

        return view('students.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = "Catat Siswa Baru - Sistem Sekolah";

        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit()
    {
        $title = "Ubah Data Siswa - Sistem Sekolah";

        return view('students.edit', [
            "title" => $title
        ]); 
    }

    public function store()
    {
        return "Adding student data";
    }

    public function update()
    {
        return "Updating student data";
    }

    public function destroy()
    {
        return "Deleting student data";
    }
}
