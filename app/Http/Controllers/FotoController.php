<?php

namespace App\Http\Controllers;

use App\foto;
use Illuminate\Http\Request;
use Storage;

class FotoController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        try{
          $foto = new foto;

          $files = $request->file('file');

          $foto->nome       = $files->getClientOriginalName();
          $foto->pasta      = 'uploads';
          $foto->status     = 1;
          $foto->oficina_id = $request->id;

          $foto->save();

          Storage::disk('public')->put($files->getClientOriginalName(), file_get_contents($files));

          return response()->json([
                              'name'    =>   $foto->nome,
                              'success' => 'Sucesso'
                              ]);
      }
      catch(Exception $e){
          return response()->json([
              'errol' => $e
              ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(foto $foto)
    {
        //
    }
}
