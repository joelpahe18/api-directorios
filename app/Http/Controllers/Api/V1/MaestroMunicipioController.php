<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MaestroMunicipios;
use Illuminate\Http\Request;

class MaestroMunicipioController extends Controller
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
     * @param  \App\Models\MaestroMunicipios  $maestroMunicipios
     * @return \Illuminate\Http\Response
     */
    public function show(MaestroMunicipios $maestroMunicipios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaestroMunicipios  $maestroMunicipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaestroMunicipios $maestroMunicipios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaestroMunicipios  $maestroMunicipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaestroMunicipios $maestroMunicipios)
    {
        //
    }
}
