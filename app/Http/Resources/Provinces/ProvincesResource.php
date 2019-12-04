<?php

namespace App\Http\Resources\Provinces;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProvincesResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'data' => ProvinceResource::collection($this->collection)
        ];
    }
}
