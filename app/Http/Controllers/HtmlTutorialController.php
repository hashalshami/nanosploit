<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlTutorialController extends Controller
{
    
    public function index(){
        
        return view('tutorials.html.intro.overview');
    }


}
