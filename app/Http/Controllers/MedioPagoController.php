<?php

namespace App\Http\Controllers;

use App\MedioPago;
use Illuminate\Http\Request;
use Response;

class MedioPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function consultaExterna(){

        $MedioPago = MedioPago::all();
        return Response::json($MedioPago);
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
     * @param  \App\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function show(MedioPago $medioPago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function edit(MedioPago $medioPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedioPago $medioPago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedioPago $medioPago)
    {
        //
    }
}
