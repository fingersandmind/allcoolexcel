<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Provinces\ProvinceResource;
use App\Http\Resources\Provinces\ProvincesResource;
use App\Province;
use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $provinces = Province::filter($request->all())->with(['cities','region'])->paginate(15);

        return new ProvincesResource($provinces);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        ProvinceResource::withoutWrapping();

        return new ProvinceResource($province);
    }

    public function provinceRadius()
    {
        $provCodes = ['0410', '0421', '0314', '0354', '0434', '0458','1339', '1374','1375','1376'];

        $gmaProvinces = Province::whereIn('provCode',$provCodes)
        ->pluck('provDesc', 'id');
        $datas = array();

        foreach($gmaProvinces as $key => $value)
        {
            $data['id'] = $key;
            $data['value'] = $value;
            array_push($datas, $data);
        }

        return $datas;

        // return new ProvincesResource($gmaProvinces);
    }
}
