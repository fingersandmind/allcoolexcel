<?php

namespace App\Http\Controllers;

use App\Baranggay;
use App\City;
use App\Province;
use App\Region;
use Illuminate\Http\Request;

class PhilippineRegProvMunCitController extends Controller
{
    public function response($jsonFile)
    {
        $json = file_get_contents($jsonFile);
        $datas = json_decode($json, true);
        return $datas['RECORDS'];
    }

    public function upload(Request $request)
    {
        if($request->region)
        {
            return $this->region($request->region);
        }
        if($request->province)
        {
            return $this->province($request->province);
        }
        if($request->city)
        {
            return $this->city($request->city);
        }
        if($request->baranggay)
        {
            return $this->baranggay($request->baranggay);
        }
    }


    public function checkIfRecordExists($model, $data)
    {
        return $model::where('psgcCode', $data)->exists();
    }


    public function region($jsonFile)
    {
        $response = $this->response($jsonFile);

        foreach($response as $data)
        {
            $region = new Region();
            if(!$this->checkIfRecordExists($region, $data['psgcCode']))
            {
                $region->create([
                    'psgcCode' => $data['psgcCode'],
                    'regDesc' => $data['regDesc'],
                    'regCode' => $data['regCode']
                ]);
            }
        }
        return response()->json(['success' => 'Region updated Successfully!']);
    }

    public function pluckedModel($model)
    {
        foreach($model as $key => $value)
        {
            $data[$value] = $key;
        }
        return $data;
    }

    public function regionsArr()
    {
        $regions = Region::pluck('regCode', 'id');
        return $this->pluckedModel($regions);
    }

    public function provinceArr()
    {
        $provinces = Province::pluck('provCode', 'id');
        return $this->pluckedModel($provinces);
    }

    public function cityArr()
    {
        $cities = City::pluck('cityCode', 'id');
        return $this->pluckedModel($cities);
    }


    public function province($jsonFile)
    {
        $response = $this->response($jsonFile);

        // return $this->regionsArr();

        foreach($response as $data)
        {
            $province = new Province();
            if(!$this->checkIfRecordExists($province,$data['psgcCode']))
            {
                $province->create([
                    'region_id' => $this->regionsArr()[$data['regCode']],
                    'psgcCode' => $data['psgcCode'],
                    'provDesc' => $data['provDesc'],
                    'regCode' => $data['regCode'],
                    'provCode' => $data['provCode']
                ]);
            }
        }
        return response()->json(['success' => 'Province updated Successfully!']);
    }

    public function city($jsonFile)
    {
        $response = $this->response($jsonFile);

        foreach($response as $data)
        {
            $city = new City();
            if(!$this->checkIfRecordExists($city, $data['psgcCode']))
            {
                $city->create([
                    'province_id' => $this->provinceArr()[$data['provCode']],
                    'psgcCode' => $data['psgcCode'],
                    'cityDesc' => $data['citymunDesc'],
                    'provCode' => $data['provCode'],
                    'cityCode' => $data['citymunCode']
                ]);
            }
        }

        return response()->json(['success' => 'City updated Successfully!']);
    }

    public function baranggay($jsonFile)
    {
        $response = $this->response($jsonFile);
        $datas = [];
        ini_set('max_execution_time', 120 );
        foreach($response as $data)
        {
            $brgy = new Baranggay();
            if(!$this->checkIfRecordExists($brgy, $data['brgyCode']))
            {
                $brgy->create([
                    'city_id' => $this->cityArr()[$data['citymunCode']],
                    'province_id' => $this->provinceArr()[$data['provCode']],
                    'psgcCode' => $data['brgyCode'],
                    'brgyDesc' => $data['brgyDesc'],
                    'provCode' => $data['provCode'],
                    'cityCode' => $data['citymunCode']
                ]);
            }
            // $collection = collect($datas);
            // $chunks = $collection->chunk(500);
            
            // foreach($chunks as $chunk)
            // {
            //     $array = $chunk->toArray();
            //     $brgy->create($array[0]);
            // }
            
        }
        return response()->json(['Yay! Success kayo!']);
    }
}
