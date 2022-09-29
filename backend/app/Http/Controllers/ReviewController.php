<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     * Mostrar una Lista del Recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
                                    "success"=> true,
                                    "data" => Review::all()
                                ], 200); 
    }

    /**
     * Display the specified resource.
     * Mostrar el Recurso Especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
                                    "success"=> true,
                                    "data" => Review::find($id)
                                ], 200); 
    }

    /**
     * Store a newly created resource in storage.
     * Almacenar un Recurso recien Creado en el Almacenamiento
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Verificar los Datos del PayLoad
        // Guardar el nuevo Review
        return response()->json([
                                    "success"=> true,
                                    "data" => Review::create($request->all())
                                ], 201); 
    }

    /**
     * Update the specified resource in storage.
     * Actualizar el Recurso Especificado en el Almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 1. Selecionar el Review a actualizar
        $b = Review::find($id);

        // 2. Actualizar el Review
        $b->update($request->all());

        // 3. Enviar el Review actualizado
        return response()->json([
                                    "success"=> true,
                                    "data" => $b
                                ], 200); 
    }

}
