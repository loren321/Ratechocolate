<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
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
            'chocolate' => $this->chocolate['name'],
            'stars' => $this->stars,
            'review_text' => $this->review_text,
            'author' => $this->author, //TODO clean this up
            'time' => $this->created_at,
        ];
    }
}
