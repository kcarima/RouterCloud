<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remota;

class RemotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remotas = Remota::all();
        return view('remotas', compact('remotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $remota = new remota();
        $remota->nombre = $request->nombre;
        $remota->email = $request->email;
        $remota->descripcion = $request->descripcion;
        $remota->save();


        return redirect()->route('remotas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function edit(remota $remota)
    {


    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $REMOTA_ID)
    {
            $remota = remota::find($REMOTA_ID);
            $remota->nombre = $request->nombre;
            $remota->email = $request->email;
            $remota->descripcion = $request->descripcion;
            $remota->save();
            return redirect()->route('remotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(remota $remota){
        $remota->delete();
        return redirect()->route('remotas');
    }

}
