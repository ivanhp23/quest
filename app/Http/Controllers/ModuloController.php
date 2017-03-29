<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Session;
use Redirect;
use Cinema\Modulos;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $modulos = Modulos::All();
        return view('modulo.index',compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulo.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Modulos::create([
            'nombre_modulo'=>$request['nombre_modulo'],'email'=>$request['email'],'password'=>$request['password']
            ]);
         return redirect('/modulo')->with('message','Profesor dado de alta exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo=Modulos::find($id);
        return view('modulo.edit',['modulo'=>$modulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $modulo=Modulos::find($id);
        $modulo->fill($request->all());
        $modulo->save();
        Session::flash('message','Los datos del profesor se editaron exitosamente');
        return redirect::to('/modulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modulos::destroy($id);
        Session::flash('message','Profesor eliminado correctamente');
        return Redirect::to('/modulo');    }
}
