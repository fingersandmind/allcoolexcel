<?php

namespace App\Http\Resources\Regions;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
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
            'type' => 'region',
            'id' => $this->id,
            'psgcCode' => $this->psgcCode,
            'regDesc' => $this->regDesc,
            'regCode' => $this->regCode,
        ];
    }
}
