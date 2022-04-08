<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function testLanding()
    {
        return view('frontend.testLanding') ;
    }
    public function testAllProduk()
    {
        return view('frontend.testAllProduk') ;
    }
    public function testDetail()
    {
        return view('frontend.testDetail') ;
    }
    public function testBlankcart()
    {
        return view('frontend.blank-cart') ;
    }
}
