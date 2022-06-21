<?php

namespace App\Http\Controllers;

use App\Models\Profesion;
use App\Models\Persona;
use Illuminate\Http\Request;

class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesiones = Profesion::all(); //eloquent ORM
        return view('profesiones.index', [
            'profesiones' => $profesiones
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesiones.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesion =new Profesion();
        $profesion->nombre = $request->nombre;
        $profesion->save();
        return redirect()->route('profesiones.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function show(Profesion $profesion)
    {
        return view ('profesiones.show',['profesion'=>$profesion]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesion $profesion)
    {
        return view ('profesiones.edit',['profesion'=>$profesion]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesion $profesion)
    {
        $profesion->nombre = $request->nombre;
        $profesion->save();
        return redirect()->route ('profesiones.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesion $profesion)
    {
        $profesion->delete();
        return redirect()->route ('profesiones.index');
        //
    }
}
