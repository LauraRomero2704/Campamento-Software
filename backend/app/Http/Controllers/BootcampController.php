<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        echo "Aqui se van a mostrar todos los bootcamps";
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
        echo "Aqui se va a guardar un nuevo bootcamp";
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
        echo "Aqui se va a mostrar el bootcamp cuyo id es $id";
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
        echo "Aqui se va a actualizar un bootcamp cuyo id es $id";
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
        echo "Aqui se va a eliminar un bootcamp cuyo id es $id";
    }
}
