<?php

namespace App\Http\Resources\Cities;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CitiesResource extends ResourceCollection
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
            'data' => CityResource::collection($this->collection)
        ];
    }
}
