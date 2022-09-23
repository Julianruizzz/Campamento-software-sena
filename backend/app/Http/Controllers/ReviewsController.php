<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Aquí se mostrarán todos los Reviews";
        return Reviews::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "Aquí se van a registrar un nuevo bootcamp";

        //Capturo el PayLoad
        //Crea el Nuevo bootcamp
        return Reviews::create(
            $request->all()
       );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "Mostrar un bootcamp en especifico por id";
        return Reviews::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return "Actualizar un bootcamp especifico cuyo id sea $id";

        //1. Encontrar el bootcamp por ID
        //2. Actualizarlo
        //3. Enviar response con el bootcamp actualizado

        ////////////////////////////////////////////////

        //1. Encontrar el bootcamp por ID
        $b=Reviews::find($id);
        //2. Actualizarlo
        $b->update($request->all());
        //3. Enviar response con el bootcamp actualizado
        return $b;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "Eliminar un bootcamp especifico cuyo id sea $id";

        //1. Encontrar el bootcamp por ID
        //2. Eliminarlo
        //3. Enviar response con el bootcamp eliminado

        //////////////////////////////////////////////
        //1. Encontrar el bootcamp por ID
        $b=Reviews::find($id);
        //2. Eliminarlo
        $b->delete();
        //3. Enviar response con el bootcamp eliminado
        return $b;
    }
}
