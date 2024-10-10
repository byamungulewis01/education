<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function our_stoty()
    {
        return view('home.about-us.our-story');
    }
    public function vision_mission()
    {
        return view('home.about-us.vision-and-mission');
    }
    public function governance_structure()
    {
        return view('home.about-us.governance-structure');
    }
    public function leadership()
    {
        return view('home.about-us.leadership');
    }
    public function offices()
    {
        return view('home.about-us.offices');
    }
    public function policy_guidelines()
    {
        return view('home.about-us.policies-and-guidelines');
    }
    public function partnerships()
    {
        return view('home.partnerships');
    }

}
