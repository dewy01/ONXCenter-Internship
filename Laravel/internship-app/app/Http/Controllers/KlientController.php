<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
    public function index(){
        $data = Klient::get();
        //return $data;
        return view('klient-list',compact('data'));
    }

    public function addKlient(){
        return view('add-klient',);
    }

    public function saveKlient(Request $request){
        //dd($request->all());
        $request->validate([
            'nazwa' => 'required'
        ]);
        $nazwa=$request->nazwa;

        $kli = new Klient();
        $kli->nazwa= $nazwa;
        $kli->save();
        
        return redirect()->back()->with('success','Klient Added Succesfully');
    }

    public function EditKlient($id){
        $data = Klient::where('id','=',$id)->first();
        return view('edit-klient',compact('data'));
    }

    public function updateKlient(Request $request){
        $request->validate([
            'nazwa' => 'required'
        ]);
        $nazwa=$request->nazwa;
        $id=$request->id;

        Klient::where('id','=',$id)->update([
            'nazwa'=>$nazwa
        ]);
        return redirect()->back()->with('success','Klient Updated Succesfully');
    }

    public function deleteKlient($id){
        Klient::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Klient Deleted Succesfully');
    }

}
