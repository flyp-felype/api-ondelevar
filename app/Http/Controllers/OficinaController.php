<?php

namespace App\Http\Controllers;

use App\oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
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
        return view('oficina/cadastro');
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