<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uang;



class TabunganController extends Controller
{

    public function index()
    {
        $tabung = Uang::all();
        // dd($tabungan);
       
        return view('index' , compact('tabung'));
        
    }


    public function store(Request $request){

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rayon' => 'required',
            'uangphp' => 'required'
        ]);
        

        Uang::create([
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'rayon'=>$request->rayon,
            'uangphp' =>$request->uangphp
        ]);

        return redirect()->route('index')->with('success','Member Berhasil Dibuat');    
    }

    public function destroyTabungan($id){
        Uang::where('id', $id)->delete();

        return redirect(route('index'))->with('failed','Member Berhasil Dihapus');

        

         

    }

    public function updateTabungan(Request $request, $id){
        Uang::where('id',$id)->update([
            'uang' => $request->uang
        ]);

        return redirect(route('index'));

    }

    public function plusMoney(Request $request, $id)
    {
        $request->validate([
            'uangphp' =>'required',
        ]); 

        $data = Uang::where('id', $id)->first();
        $total_money = $data['uangphp'] + $request->uangphp;
        $data->update([
            'uangphp'=> $total_money, 
        ]);

        return redirect(route('index'));
        
    }   

    public function minMoney(Request $request, $id)
    {
        $request->validate([
            'uangphp' =>'required',
        ]); 

        $data = Uang::where('id', $id)->first();

        
            if ($data['uangphp'] < $request->uangphp){
                return redirect(route('index'));
            } else{
                $total_money = $data['uangphp'] - $request->uangphp;
            }

        $data->update([
            'uangphp'=> $total_money, 
        ]);

        return redirect(route('index'));
        
    }   

    


    
}
