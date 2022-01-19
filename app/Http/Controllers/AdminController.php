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


    public function deletemenu($id){

        $data = makanan::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function menu(){

        $data = makanan::all();
        return view('admin.menu',compact("data"));
    }

    public function updateview($id){

        $data=Makanan::find($id);

        return view("admin.updateview",compact("data"));
    }


    public function update(Request $request,$id){

        $data=Makanan::find($id);

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

    public function upload(Request $request){
        $data = new Makanan;


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
