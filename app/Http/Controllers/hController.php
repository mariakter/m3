<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hController extends Controller
{
    public function i(){
        return view("i");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
    public function why(){
        return view("why");
    }
    public function tastimonial(){
        return view("tastimonial");
    }
    public function team(){
        return view("team");
    }

}
