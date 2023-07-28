<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zamowienie;

class ZamowienieController extends Controller
{
    public function index(){
        $data = Zamowienie::get();
        //return $data;
        return view('zamowienie-list',compact('data'));
    }

    public function addZamowienie(){
        return view('add-zamowienie',);
    }

    public function saveZamowienie(Request $request){
        //dd($request->all());
        $request->validate([
            'nazwa' => 'required',
            'id_klienta' => 'required',
            'id_samochodu' => 'required'
        ]);
        $nazwa=$request->nazwa;
        $id_klienta=$request->id_klienta;
        $id_samochodu=$request->id_samochodu;

        $zam = new Zamowienie();
        $zam->nazwa= $nazwa;
        $zam->id_klienta = $id_klienta;
        $zam->id_samochodu = $id_samochodu;
        $zam->save();
        
        return redirect()->back()->with('success','Zamowienie Added Succesfully');
    }

    public function EditZamowienie($id){
        $data = Zamowienie::where('id','=',$id)->first();
        return view('edit-zamowienie',compact('data'));
    }

    public function updateZamowienie(Request $request){
        $request->validate([
            'nazwa' => 'required',
            'id_klienta' => 'required',
            'id_samochodu' => 'required'
        ]);
        $nazwa=$request->nazwa;
        $id_klienta=$request->id_klienta;
        $zam->id_samochodu = $id_samochodu;
        $id=$request->id;

        Zamowienie::where('id','=',$id)->update([
            'nazwa'=>$nazwa,
            'id_klienta'=>$id_klienta,
            'id_samochodu'=>$id_samochodu
        ]);
        return redirect()->back()->with('success','Zamowienie Updated Succesfully');
    }

    public function deleteZamowienie($id){
        Zamowienie::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Zamowienie Deleted Succesfully');
    }

}
