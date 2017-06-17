<?php

namespace App\Http\Controllers;

use App\oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
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
        return view('oficina/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('oficina/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          try{
            $oficina = new oficina;

            $oficina->nome = $request->nome;
            $oficina->endereco = $request->endereco;
            $oficina->cidade = $request->cidade;
            $oficina->uf = $request->uf;
            $oficina->telefone = $request->telefone1;
            $oficina->telefone2 = $request->telefone2;
            $oficina->celular = $request->celular;
            $oficina->uf = $request->uf;
            $oficina->longitude = $request->longitude;
            $oficina->latitude = $request->latitude;
            $oficina->cep = $request->cep;
            $oficina->idusers = 1;

            $oficina->save();

            return response()->json([
                                'nome'    => $oficina->nome,
                                'id'      => $oficina->id,
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
     * @param  \App\oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function show(oficina $oficina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function edit(oficina $oficina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oficina $oficina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function destroy(oficina $oficina)
    {
        //
    }
}
