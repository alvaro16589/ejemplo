<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'nombre'=> $this->nombre,
            'apellidoPaterno'=> $this->apellidoPaterno,
            'apellidoMaterno'=> $this->apellidoMaterno,
            'ci'=> $this->ci,
            'sexo'=> $this->sexo
        ];
    }
}
