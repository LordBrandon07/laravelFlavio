<?php

namespace App\Http\Controllers;

use App\Models\Profesiones;
use Illuminate\Http\Request;

class ProfesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesiones/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profesiones::create(
            $request->all()
        );

        return redirect()->back()
            ->with('success', 'creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function show(Profesiones $profesiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesiones $profesiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesiones $profesiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesiones $profesiones)
    {
        //
    }
}
