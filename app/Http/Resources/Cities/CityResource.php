<?php

namespace App\Http\Resources\Cities;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'type' => 'city',
            'id' => $this->id,
            'psgcCode' => $this->psgcCode,
            'cityDesc' => $this->cityDesc,
            'cityCode' => $this->cityCode,
            'provCode' => $this->provCode,
            
            'province' => [
                'province_id' => $this->province_id,
                'psgcCode' => $this->province->psgcCode,
                'provDesc' => $this->province->provDesc,
                'provCode' => $this->province->provCode,
            ]
        ];
    }
}
