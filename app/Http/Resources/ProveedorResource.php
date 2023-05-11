<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProveedorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'IdProveedor' => $this->id,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'tipo' => $this->tipo,
            'activo' => $this->activo,
        ];
    }
}
