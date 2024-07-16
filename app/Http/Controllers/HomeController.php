<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use App\Models\SubscriptionType;

class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $images = GalleryImage::all();
        $subscriptionTypes = SubscriptionType::all();
        return view('welcome', compact('images','subscriptionTypes','countries'));
    }

    
}
