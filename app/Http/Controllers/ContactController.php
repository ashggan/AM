<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    //
    public function all(){
        $cons = Contact::all();
        return $cons;
    }

    public function store(Request $request){
         $con = new Contact;
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'subject' => 'required|string',
        //     'msg' => 'required|string',
        // ]);
        $con->email =$request->email;
        $con->subject =$request->subject;
        $con->msg =$request->msg;
        if($con->save()) return response()->json(['success'=>'added']);
        // dd($request);

    }
    public function del($id){
        $con = Contact::find($id);
        if($con->delete()) return response()->json(['success'=>'deleted']);
     }
}
