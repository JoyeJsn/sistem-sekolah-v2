<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __invoke(Request $request)
    {
        $title = "Ubah Data Kelas - Sistem Sekolah";

        return view('classes.edit', [
            "title" => $title
        ]);
    }
}
