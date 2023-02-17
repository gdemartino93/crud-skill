<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // qui possiamo personalizzare l'oggetto creando delle nostre chiavi
            'id' => $this->id,
            'nome' => $this->name,
            'livello_skill' => $this->descrizione,
            'Creato' => $this->created_at,
        ];
    }
}
