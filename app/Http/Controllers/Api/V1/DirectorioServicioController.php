<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\DirectorioServicios;
use Illuminate\Http\Request;
use App\Http\Requests\V1\DirectorioRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ValidatedInput;

class DirectorioServicioController extends Controller
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
        $directorios = DirectorioServicios::all();

        return response()->json([
                'success'   =>  true,
                'message'   =>  'Consulta exitosa.',
                'data'      =>  $directorios,
                'codigo'    =>  200
            ], 200);
    }

    function maximo_elemento( $numeros )
    {
        $respuesta = array();

        for( $i = 0; $i < count( $numeros ); $i ++ )
        {
            $suma = 0;
            $respuesta[ $numeros[$i] ] = 0;

            for( $j = ($i + 1); $j < count( $numeros ); $j ++)
            {
                $suma += $numeros[ $j ];
            }
            
            $respuesta[ $i ] = $suma;
            print_r( $respuesta );die();
            unset( $respuesta );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DirectorioRequest $request)
    {
        // $request->validated();

        $data = $request->all();
        
        $respuesta = DirectorioServicios::create($data);

        if ( $respuesta ) {
            // return response()->json(['message' => 'Servicio creado exitosamente'], 201);
            return response()->json([
                'success'   =>  true,
                'message'   =>  'Consulta exitosa.',
                'data'      =>  $directorios,
                'codigo'    =>  200
            ], 200);
        }

        return response()->json(['message' => 'Error to create post'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DirectorioServicios  $directorioServicios
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $directorio = DirectorioServicios::where('id', '=', $Id)->first();

        return response()->json([
                'success'   =>  true,
                'message'   =>  'Consulta exitosa.',
                'data'      =>  $directorio,
                'codigo'    =>  200
            ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DirectorioServicios  $directorioServicios
     * @return \Illuminate\Http\Response
     */
    public function update(DirectorioRequest $request, $Id)
    {
        $data = $request->all();

        $directorio = DirectorioServicios::where('id', '=', $Id)->first();

        $respuesta = $directorio->update( $data );

        if ( $respuesta ) {
            return response()->json(['message' => 'Servicio actualizado exitosamente'], 200);
        }

        return response()->json(['message' => 'Error to create post'], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DirectorioServicios  $directorioServicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $directorio = DirectorioServicios::find($Id); 
        $respuesta = $directorio->delete();

        if ( $respuesta ) {
            return response()->json(['message' => 'Servicio eliminado exitosamente'], 200);
        }

        return response()->json(['message' => 'Error to create post'], 500);
    }
}
