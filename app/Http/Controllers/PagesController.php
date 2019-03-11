<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class PagesController extends Controller
{
    //
    public function about(){
        $title = "about";
         return view('pages.about')->with('title',$title) ;    
    }

    public function home(){
        return view('pages.main');
    }

    public function profile(){
        return view('pages.profile');   
    }

    public function contact(){
        $title = "contant";
        return view('pages.contact')->with('title',$title);   
    }

    // public function portifolio(){
    //     $pros = Projects::all();
    //     return view('pages.portifolio')->with('pros',$pros);   
    // }
    // public function(){}
            
}
