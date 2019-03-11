<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Image;
use File;
use App\Http\Resources\listing  ;

class GalleryController extends Controller
{
    //
    public function getImgs(){
        $imgs = Gallery::all();
        return listing::collection($imgs);
    }

    public function store(Request $request){
         
        // $this.validate($request,[ 'attachments' => 'image']);
        if($request->file('attachments')){
            foreach($request->file('attachments') as $img){
               $name = time(); //$img.getClientOriginalName();
               Image::make($img)->save(public_path('gallery'),$name) ;
            }
        }
    }

    public function save(Request $request){
        // $this->validate($request,[]);
        // dd($request);
        if($request->hasFile('name')){
            foreach($request->file('name') as $img ){
                $gall = new Gallery;
                $fullName = time().$img->getClientOriginalName();
                $path = $img->move('gallery',$fullName);
                $gall->name = $fullName;
                $gall->save() ;
            }
        }

        return redirect()->route('gallery.home') ;

    }

    public function remove(Request $request , $id){
        $img = Gallery::find($id);
        $path = "/gallery/".$img->name;
        // return $path;
        if(File::exists($path)){
            file::delete($path);
            if($img->delete() ) return redirect()->route('gallery.home') ; 
            
        }
    }

}
