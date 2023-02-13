<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BegituSulid;

class BegituSulidController extends Controller
{
    public function index(){

        $data = BegituSulid::get();

      return view('index')
      ->with('data', $data);
     }

     public function store(Request $request)
     {
         $request->validate([
             'Nis' => 'required',
             'Nama' => 'required',
             'Rayon' => 'required',
         ]);

         BegituSulid::create($request->all());

         return redirect()->route('index')
         ->with('success', 'Data berhasil dibuat');
     }

     public function edit($id) {
        $data = BegituSulid::where('id',$id)->first();
        return view('edit')
        ->with('data',$data);
     }

     public function update(Request $request, $id){
         
         $data = BegituSulid::where('id', $id)->first();
         if($request->action == 'add'){
             $total_money = $data['Uang'] + $request->Uang;
            } elseif($request->action == 'take'){
                if($request->Uang > $data['Uang']){
                    return redirect(route('index'))->with('fail', 'UANG LU GK CUKUP !!!');
                }else{
                    $total_money = $data['Uang'] - $request->Uang;
                    // return redirect(route('index'))->with('op','UANG BERHASIL DI AMBIL');
                }
            }else{
                BegituSulid::where('id', $id)->update([
                    'Nama' => $request->Nama,
                    'Nis' => $request->Nis,
                    'Rayon' => $request->Rayon,
                ]);

                return redirect()->route('index')
                    ->with('success', 'Data berhasil di update!');
            }
            BegituSulid::where('id',$id)->update([
                'Nama' => $request->Nama,
                'Nis' => $request->Nis,
                'Rayon' => $request->Rayon,
                'Uang' => $total_money,
            ]);
            return redirect(route('index'))->with('op', 'UANG BERHASIL DI AMBIL');
  
        return redirect()->route('index')
        ->with('edit','Update berhasail dibuat');
     }


     public function deleteActivity($id){
        BegituSulid::where('id',$id)->delete();
        
        return redirect()->route('index')->with('lol','Delete Berhasil');
        
     }


}
