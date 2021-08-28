<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\UbicacionServicios;
use Illuminate\Http\Request;

class UbicacionServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
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
     * @param  \App\Models\UbicacionServicios  $ubicacionServicios
     * @return \Illuminate\Http\Response
     */
    public function show(UbicacionServicios $ubicacionServicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UbicacionServicios  $ubicacionServicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UbicacionServicios $ubicacionServicios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UbicacionServicios  $ubicacionServicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(UbicacionServicios $ubicacionServicios)
    {
        //
    }
}
