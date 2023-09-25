<?php

namespace App\Http\Controllers\Front;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;

class HomeController extends Controller
{


    function landing()
    {

        $services = Service::get(['name', 'image', 'description']);
        $partners = Partner::get(['logo']);
        return view('front.landing', compact('services', 'partners'));
    }


    
    function service()
    {


        $services=Service::get(['name']);
        return view('front.services',compact('services'));
    }

    function gallery()
    {


        return view('front.gallery');
    }
}
