<?php

namespace App\Http\Resources\Regions;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Regions\RegionResource;

class RegionsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => RegionResource::collection($this->collection)
        ];
    }
}
