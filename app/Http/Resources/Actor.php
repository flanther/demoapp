<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Actor extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->actor_id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
        ];
        // return parent::toArray($request);
    }
}
