<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Resources\Cities\CitiesResource;
use App\Http\Resources\Cities\CityResource;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = City::filter($request->all())
        ->with(['baranggays','province'])
        ->paginate(15);

        return new CitiesResource($cities);
    }

    public function cities(Request $request)
    {
        $cities = City::where('province_id', $request->province_id)
        ->pluck('cityDesc', 'id');

        return $cities;

        // return new CitiesResource($cities);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        CityResource::withoutWrapping();

        return new CityResource($city);
    }
}
