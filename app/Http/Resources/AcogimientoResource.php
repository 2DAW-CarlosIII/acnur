<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class AcogimientoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return array(
            'user_id' => $this->user_id,
            'acogido_id' => $this->acogido_id,
            'aceptado' => $this->aceptado,
            'email' => UserResource::collection($this->email),
            'nombre' => AcogidoResource::collection($this->nombre),
            'pais' => AcogidoResource::collection($this->pais)
        );
    }
}
