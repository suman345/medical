<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecilaistModel;



class SpecialistController extends Controller
{
    public function specialist(){

        $spcilalist_data = SpecilaistModel::get();
        // dd($spcilalist_data);
        return view('pages.specilaist.specilaist',compact('spcilalist_data'));

    }
}
