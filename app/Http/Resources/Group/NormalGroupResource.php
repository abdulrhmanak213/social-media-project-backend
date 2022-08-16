<?php

namespace App\Http\Resources\Group;

use Illuminate\Http\Resources\Json\JsonResource;

class NormalGroupResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "cover" => $this->cover,
        ];
    }
}
