<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\Makanan;

class HomeController extends Controller
{
    public function index(){
        $data = Makanan::all();
        return view("home",compact("data"));
    }


    public function redirects(){
        $data = Makanan::all();
        $usertype = Auth::user()->usertype;
        if ($usertype ==1){
            return view('admin.adminhome');
        }

        else {
            return view('home',compact('data'));
        }
    }
}
