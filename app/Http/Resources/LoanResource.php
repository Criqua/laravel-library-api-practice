<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'libro_id' => $this->libro_id,
            'usuario_id' => $this->usuario_id,
            'fecha_prestamo' => $this->fecha_prestamo,
            'fecha_devolucion_esperada' => $this->fecha_devolucion_esperada,
            'fecha_devolucion_real' => $this->fecha_devolucion_real,
            'estado' => $this->estado
        ];
    }
}
