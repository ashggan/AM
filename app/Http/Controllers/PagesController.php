<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class PagesController extends Controller
{
    //
    public function about(){
        return view('pages.about')   ;     
    }

    public function home(){
        return view('pages.profile');
    }

    public function profile(){
        return view('pages.profile');   
    }

    public function contact(){
        return view('pages.contact');   
    }

    // public function portifolio(){
    //     $pros = Projects::all();
    //     return view('pages.portifolio')->with('pros',$pros);   
    // }
    // public function(){}
            
}
