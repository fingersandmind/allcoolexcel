<?php

namespace App\Http\Resources\Barangays;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BarangaysResource extends ResourceCollection
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
            'data' => BarangayResource::collection($this->collection)
        ];
    }
}
