<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('front-end.landingpage', [
            'title' => 'Landing Page',
        ]);
    }
}
