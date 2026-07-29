<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return"Displaying the major list page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return"Displaying the add major page";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return"Adding major data";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return"Displaying the major with ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return"Displaying the edit major with ID: {id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return"Updating major data";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        return"Deleting major data";
    }
}
