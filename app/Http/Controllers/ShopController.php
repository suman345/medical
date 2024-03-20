<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){

        // $spcilalist_data = SpecilaistModel::get();
        // dd($spcilalist_data);
        return view('pages.shop.shop_add');
        // dssfgfdgdfg

    }

    public function shop_show(){

        // $spcilalist_data = SpecilaistModel::get();
        // dd($spcilalist_data);
        return view('pages.shop.shop_list');

    }
}
