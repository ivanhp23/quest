<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Tema;
use Cinema\Modulos;
use Session;
use Redirect;
use Illuminate\Routing\Route;


class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route)
    {
      $this->tema = Tema::find($route->getParameter('tema'));
    }

    public function index()
    {
        $temas = Tema::Temas();
        return view('tema.index',compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modulos = Modulos::lists('nombre_modulo','id');
        return view('tema.create',compact('modulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tema::create($request->all());
        return "listo";
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
       $modulos=Modulos::lists('nombre_modulo','id');
        return view('tema.edit',['tema'=>$this->tema,'modulos'=>$modulos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->tema->fill($request->all());
        $this->tema->save();
        Session::flash('message','Tema editado correectamente');
        return redirect::to('/tema');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $this->tema->delete();
    Session::flash('message','Tema eliminado correectamente');
        return redirect::to('/tema');
    }
}
