<?php

namespace App\Http\Controllers;

use App\AirconList;
use Illuminate\Http\Request;

class AirconListController extends Controller
{
    public function data()
    {
        return AirconList::all();
    }
}
