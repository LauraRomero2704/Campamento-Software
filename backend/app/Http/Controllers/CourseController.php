<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
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
                                    "data" => Course::find($id)
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
        // 1. Selecionar el Course a actualizar
        $b = Course::find($id);

        // 2. Actualizar el Course
        $b->update($request->all());

        // 3. Enviar el Course actualizado
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
        // 1. Selecionar el Course a eliminar
        $b = Course::find($id);

        // 2. Eliminar el Course
        $b->delete();

        // 3. Enviar el Course eliminadocd bacx
        return response()->json([
                                    "success"=> true,
                                    "data" => $b
                                ], 200); 
    }

}
