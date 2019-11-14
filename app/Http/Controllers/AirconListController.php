<?php

namespace App\Http\Controllers;

use App\AirconList;
use App\Imports\AirconListImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AirconListController extends Controller
{
    public function data()
    {
        return AirconList::all();
    }

    public function import(Request $request)
    {
        // dd($request->file('excel'));
        Excel::import(new AirconListImport, request()->file('excel'));

        return response()->json(['success' => 'Successfully uploaded eh!']);
    }
}
