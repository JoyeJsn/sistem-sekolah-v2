<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return 'Displaying the teacher list page';
    }

    public function show(string $id)
    {
        return "Displaying teacher with ID: {$id}";
    }

    public function create()
    {
        return "Displaying the add teacher page";
    }

    public function edit()
    {
        return "Displaying the edit teacher page";
    }

    public function store()
    {
        return "Adding teacher data";
    }

    public function update()
    {
        return "Updating teacher data";
    }

    public function destroy()
    {
        return"Deleting teacher data";
    }
}
