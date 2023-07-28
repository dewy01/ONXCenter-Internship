<?php

namespace App\Http\Controllers;

use App\Models\Samochod;
use Illuminate\Http\Request;

class SamochodController extends Controller
{
    public function index(){
        $data = Samochod::get();
        //return $data;
        return view('samochod-list',compact('data'));
    }

    public function addSamochod(){
        return view('add-samochod',);
    }

    public function saveSamochod(Request $request){
        //dd($request->all());
        $request->validate([
            'nazwa' => 'required'
        ]);
        $nazwa=$request->nazwa;

        $sam = new Samochod();
        $sam->nazwa= $nazwa;
        $sam->save();
        
        return redirect()->back()->with('success','Samochod Added Succesfully');
    }

    public function EditSamochod($id){
        $data = Samochod::where('id','=',$id)->first();
        return view('edit-samochod',compact('data'));
    }

    public function updateSamochod(Request $request){
        $request->validate([
            'nazwa' => 'required'
        ]);
        $nazwa=$request->nazwa;
        $id=$request->id;

        Samochod::where('id','=',$id)->update([
            'nazwa'=>$nazwa
        ]);
        return redirect()->back()->with('success','Samochod Updated Succesfully');
    }

    public function deleteSamochod($id){
        Samochod::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Samochod Deleted Succesfully');
    }
}
