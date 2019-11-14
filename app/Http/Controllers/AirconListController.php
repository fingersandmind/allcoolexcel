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

    public function index()
    {
        $lists = AirconList::get();

        return view('pages.dashboard', compact('lists'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel' => 'required|max:50000|mimes:xlsx'
        ]);
        Excel::import(new AirconListImport, request()->file('excel'));
        return redirect()->route('dashboard');
    }
}
