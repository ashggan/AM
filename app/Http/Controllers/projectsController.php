<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;
use App\Http\Resources\listing  ;
use App\Gallery;
use App\Technoliges;

class projectsController extends Controller
{

    public function index()
    {
        $pros = Projects::all();
        foreach ($pros as $pro) {
            // $pro->wraps = $this->unserializing($pro->wraps);
            $pro->features = $this->unserializing($pro->features);
            $pro->screenshots = unserialize($pro->screenshots);
            $pro->screenshots = Gallery::find($pro->screenshots);
            // $pro->techs = unserialize($pro->techs);
            // $pro->techs = Technoliges::find($pro->techs);
        }
        return view('pages.portifolio')->with('pros',$pros);   
    }

    public function update(Request $request, $id)
    {
        # code...
        $pro = Projects::find($id);
        $pro->title = $request->name;
        $pro->summery = $request->summery;
        $pro->techs = serialize($request->techs);
        $pro->wraps = serialize($request->wraps);
        $pro->features = serialize($request->features);
        $pro->screenshots = serialize($request->screenshot);
        if($pro->save()) return response()->json("updated well !") ;
        // return "yes";
    }

    public function store(Request $request)
    {
        //
        $pro = new Projects;
        $pro->title = $request->name;
        $pro->summery = $request->summery;
        $pro->techs = serialize($request->techs);
        $pro->wraps = serialize($request->wraps);
        $pro->features = serialize($request->features);
        $pro->screenshots = serialize($request->screenshot);
        if($pro->save()) return redirect()->route('project.home');

    }

    private function unserializing($item){
        $data =  unserialize($item);   
        $data = json_decode(json_encode($data, JSON_FORCE_OBJECT));
        return $data;
    }

    public function show($id)
    {
        //
        $pro = Projects::find($id);
        $pro->wraps = $this->unserializing($pro->wraps);
        $pro->features = $this->unserializing($pro->features);
        $pro->screenshots = unserialize($pro->screenshots);
        $pro->screenshots = Gallery::find($pro->screenshots);
        $pro->techs = unserialize($pro->techs);
        $pro->techs = Technoliges::find($pro->techs);
        return  $pro;// listing::collection($pro);
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
