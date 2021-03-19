<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\IndonesiaProvince;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaDistrict;
use App\Models\IndonesiaVillage;

class FrontendController extends Controller
{
    public function register()
    {
        $data['provinces'] = IndonesiaProvince::all();
        return view('core.register.create', $data);
    }

    public function cities($id)
    {
        $cities = IndonesiaCity::where('province_id', $id)->get();
        return response()->json($cities);
    }

    public function districts($id)
    {
        $districts = IndonesiaDistrict::where('city_id', $id)->get();
        return response()->json($districts);
    }

    public function villages($id)
    {
        $villages = IndonesiaVillage::where('district_id', $id)->get();
        return response()->json($villages);
    }

}
