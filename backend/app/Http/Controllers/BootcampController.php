<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
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
                                    "data" => Bootcamp::all()
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
        // Guardar el nuevo bootcamp
        return response()->json([
                                    "success"=> true,
                                    "data" => Bootcamp::create($request->all())
                                ], 201); 
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
                                    "data" => Bootcamp::find($id)
                                ], 200); 
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
        // 1. Selecionar el bootcamp a actualizar
        $b = Bootcamp::find($id);

        // 2. Actualizar el bootcamp
        $b->update($request->all());

        // 3. Enviar el bootcamp actualizado
        return response()->json([
                                    "success"=> true,
                                    "data" => $b
                                ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     * Eliminar el Recurso Especificado en el Almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 1. Selecionar el bootcamp a eliminar
        $b = Bootcamp::find($id);

        // 2. Eliminar el bootcamp
        $b->delete();

        // 3. Enviar el bootcamp eliminadocd bacx
        return response()->json([
                                    "success"=> true,
                                    "data" => $b
                                ], 200); 
    }
}
