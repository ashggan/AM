<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Projects;
use App\Technoliges;
use Analytics;
use Spatie\Analytics\Period;

class adminPages extends Controller
{
    public function index(){
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        return $analyticsData; //view('dashboard.index');
    }

    public  function techs(){
        return view('techs.index');
    }

    public  function gallery(){
        $imgs = Gallery::orderBy('created_at','desc')->paginate(20);
        return view('gallery.index')->with('imgs',$imgs);
    }

    private function unserializing($item){
        $data =  unserialize($item);   
        $data = json_decode(json_encode($data, JSON_FORCE_OBJECT));
        return $data;
    }

    public  function project(){
        $pros = Projects::all();
        foreach ($pros as $pro) {
            $pro->wraps = $this->unserializing($pro->wraps);
            $pro->features = $this->unserializing($pro->features);
            $pro->screenshots = unserialize($pro->screenshots);
            $pro->screenshots = Gallery::find($pro->screenshots);
            $pro->techs = unserialize($pro->techs);
            $pro->techs = Technoliges::find($pro->techs);
        }           
        return  view('projects.index')->with('pros',$pros);
    }

    public function show($id){
        $pro = Projects::find($id);
        $pro->wraps = $this->unserializing($pro->wraps);
        $pro->features = $this->unserializing($pro->features);
        $pro->screenshots = unserialize($pro->screenshots);
        $pro->screenshots = Gallery::find($pro->screenshots);
        $pro->techs = unserialize($pro->techs);
        $pro->techs = Technoliges::find($pro->techs);
        return  view('projects.show')->with('pro',$pro);

    }

    public function create(){
        return  view('projects.create');
    }
    public function edit($id){
        $pro = Projects::find($id);
        $pro->wraps = $this->unserializing($pro->wraps);
        $pro->features = $this->unserializing($pro->features);
        $pro->screenshots = unserialize($pro->screenshots);
        $pro->screenshots = Gallery::find($pro->screenshots);
        $pro->techs = unserialize($pro->techs);
        $pro->techs = Technoliges::find($pro->techs);
        return   view('projects.edit')->with('pro',$pro);        
    }

    public function remove($id){
        $pro = Projects::find($id);
        if($pro->delete()) return redirect()->route('project.home') ;
    }
    public function contact(){
        return view('home');
    }

}
