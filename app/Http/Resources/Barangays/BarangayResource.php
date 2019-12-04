<?php

namespace App\Http\Resources\Barangays;

use Illuminate\Http\Resources\Json\JsonResource;

class BarangayResource extends JsonResource
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
            'type' => 'barangay',
            'id' => $this->id,
            'psgcCode' => $this->psgcCode,
            'brgyDesc' => $this->brgyDesc,
            'city' => [
                'id' => $this->city->id,
                'psgcCode' => $this->city->psgcCode,
                'citiDesc' => $this->city->cityDesc,
                'cityCode' => $this->cityCode,
            ],
            'province' => [
                'id' => $this->province->id,
                'psgcCode' => $this->province->psgcCode,
                'provDesc' => $this->province->provDesc,
                'provCode' => $this->provCode,
            ],
        ];
    }
}
