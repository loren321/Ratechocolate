<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChocolateResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'cocoa_percentage' => $this->cocoa_percentage,
            'manufacturer' => $this->manufacturer['name'],
            'country' => $this->country,
            'nutrition' => $this->nutrition,
        ];
    }
}
