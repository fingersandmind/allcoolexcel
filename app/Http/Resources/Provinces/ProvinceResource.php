<?php

namespace App\Http\Resources\Provinces;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
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
            'type' => 'province',
            'id' => $this->id,
            'psgcCode' => $this->psgcCode,
            'provDesc' => $this->provDesc,
            'provCode' => $this->provCode,
            'regCode' => $this->regCode,
            'region' => [
                'reg_id' => $this->region_id,
                'psgcCode' => $this->region->psgcCode,
                'regDesc' => $this->region->regDesc,
                'regCode' => $this->region->regCode,
            ]
        ];
    }
}
