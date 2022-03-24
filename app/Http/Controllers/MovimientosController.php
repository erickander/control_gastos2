<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos;
use App\movimientos;
use Auth;



class MovimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos=movimientos::all();
        return view('movimientos.index')
        ->with('movimientos',$movimientos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos=tipos::all();
        return view ('movimientos.create')->with('tipos',$tipos);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $data['usu_id']=Auth::user()->usu_id;
        //dd($data);
        movimientos::create($data);
        return redirect(route('movimientos'));
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
        
        $movimientos=Movimientos::find($id);
        $tipos=tipos::all();
         return view("movimientos.edit")
         ->with('movimientos',$movimientos)->with('tipos',$tipos);
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
        $mov=movimientos::find($id);
        $mov->update($request->all());
        return redirect(route('movimientos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        movimientos::destroy($id);
        return redirect(route('movimientos'));
    }
}
