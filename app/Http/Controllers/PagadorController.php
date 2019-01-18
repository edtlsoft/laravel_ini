<?php

namespace App\Http\Controllers;

use App\Models\Pagador;
use Illuminate\Http\Request;

class PagadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagadores = Pagador::all()->where('estado', '=', '1');

        return response()->json(compact('pagadores'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagador  $pagador
     * @return \Illuminate\Http\Response
     */
    public function show(Pagador $pagador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagador  $pagador
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagador $pagador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagador  $pagador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagador $pagador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagador  $pagador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagador $pagador)
    {
        //
    }
}
