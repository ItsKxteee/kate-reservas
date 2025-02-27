<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reserva_espacios extends Controller
{
    public function index()
    {
        return view ('opciones.index');
    }


    public function create()
    {
        return view ('opciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('opciones.edit', ['id' => $id = 0]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
