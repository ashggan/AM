<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\listing  ;
use App\Technoliges;
class TechnoligyController extends Controller
{
    public function index()
    {
        $techs = Technoliges::all();
        return listing::collection($techs);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $tech = new Technoliges;
        $tech->name = $request->get('name');
        if($tech->save())  return response()->json(['success' => 'done'], 200);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
        // return '555';
        $tech  = Technoliges::find($id);
        $tech->name = $request->get('name');
        if($tech->save()) return response()->json(['success' => 'done'], 200);       
    }


    public function destroy($id)
    {
        //
        $tech  = Technoliges::find($id);
        if($tech->delete()) return response()->json(['success' => 'done'], 200);       

    }
}
