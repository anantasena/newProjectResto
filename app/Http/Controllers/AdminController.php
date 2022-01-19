<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Makanan;


class AdminController extends Controller
{
    public function user(){
        $data=user::all();
        return view('admin.user',compact("data"));
    }
    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function menu(){
        return view('admin.menu');
    }

    public function upload(Request $request){
        $data = new makanan;


        $image=$request->gb_makanan;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->gb_makanan->move('FotoMakanan',$imagename);
        $data->gb_makanan=$imagename;



        $data->nm_makanan=$request->nm_makanan;
        $data->harga=$request->harga;
        $data->deskripsi=$request->deskripsi;

        $data->save();
        return redirect()->back();

    }
}
