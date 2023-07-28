<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pracownik;

class PracownikController extends Controller
{
    public function index(){
        $data = Pracownik::get();
        //return $data;
        return view('pracownik-list',compact('data'));
    }

    public function addPracownik(){
        return view('add-pracownik',);
    }

    public function savePracownik(Request $request){
        //dd($request->all());
        $request->validate([
            'nazwa' => 'required'
        ]);
        $nazwa=$request->nazwa;

        $pra = new Pracownik();
        $pra->nazwa= $nazwa;
        $pra->save();
        
        return redirect()->back()->with('success','Pracownik Added Succesfully');
    }

    public function editPracownik($id){
        $data = Pracownik::where('id','=',$id)->first();
        return view('edit-pracownik',compact('data'));
    }

    public function updatePracownik(Request $request){
        $request->validate([
            'nazwa' => 'required'
        ]);
        $nazwa=$request->nazwa;
        $id=$request->id;

        Pracownik::where('id','=',$id)->update([
            'nazwa'=>$nazwa
        ]);
        return redirect()->back()->with('success','Pracownik Updated Succesfully');
    }

    public function deletePracownik($id){
        Pracownik::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Pracownik Deleted Succesfully');
    }
}
