<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Resources\PersonaResource;
use Illuminate\Http\Response;
use App\Http\Requests\PersonaRequest;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::query()->orderByDesc('id')->paginate(5);
        return PersonaResource::collection($personas,Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaRequest $request)
    {
   
        try {
            $persona = new Persona();
            $persona->nombre = $request->nombre;
            $persona->apellidoPaterno = $request->apellidoPaterno;
            $persona->apellidoMaterno = $request->apellidoMaterno;
            $persona->ci = $request->ci;
            $persona->sexo = $request->sexo;
            $persona->save();
            return response()->json([
                'mensaje' => 'El registro persona se guardo exitosamente',
                'persona' => new PersonaResource($persona)
            ], Response::HTTP_CREATED);
        } catch (\Illuminate\Database\QueryException $e) {
            response()->json([
                'mensaje' => 'Error al guardar, consulte con el Administrador' . $e
            ], Response::HTTP_FORBIDDEN);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
