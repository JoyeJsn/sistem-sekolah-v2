<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request)
    {
        $title = "Catat Kelas Baru - Sistem Sekolah";

        return view('classes.show', [
            'title' => $title
        ]);
    }
}
