<?php

namespace App\Http\Controllers\Api;

use App\Baranggay;
use App\Http\Controllers\Controller;
use App\Http\Resources\Barangays\BarangayResource;
use App\Http\Resources\Barangays\BarangaysResource;
use Illuminate\Http\Request;

class BarangaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brgys = Baranggay::with(['city', 'province'])->paginate(15);

        return new BarangaysResource($brgys);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Baranggay $barangay)
    {
        BarangayResource::withoutWrapping();
        return new BarangayResource($barangay);
        //
    }

    public function barangays(Request $request)
    {
        $brgys = Baranggay::where('city_id', $request->city_id)
        ->pluck('brgyDesc', 'id');

        return $brgys;

        // return new BarangaysResource($brgys);
    }
}
