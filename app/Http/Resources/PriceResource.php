<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceResource extends JsonResource
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
            'id' =>           $this->id,
            'title' =>        $this->title,
            'installation' => $this->installation,
            'dismantling' =>  $this->dismantling,
            'from' =>         $this->from,
            'unit' =>         $this->unit
        ];
    }
}
