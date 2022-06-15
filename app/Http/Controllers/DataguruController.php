<?php

namespace App\Http\Controllers;

use App\Models\dataguru;
use Illuminate\Http\Request;

class DataguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo"<h1> ini adalah data guru</h1>";

        return response()->json("ini adalah data guru");
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
     * @param  \App\Models\dataguru  $dataguru
     * @return \Illuminate\Http\Response
     */
    public function show(dataguru $dataguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataguru  $dataguru
     * @return \Illuminate\Http\Response
     */
    public function edit(dataguru $dataguru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataguru  $dataguru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataguru $dataguru)
    {
        //

        return  response()->json("ini update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataguru  $dataguru
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataguru $dataguru)
    {
        //

        return response()->json("ini delete $dataguru");
    }
}
