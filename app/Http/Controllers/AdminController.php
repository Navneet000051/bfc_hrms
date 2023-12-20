<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class AdminController extends Controller
{
    public function Dashboard(){
        return view('Admin.dashboard');
    }
   
    // public function login(Request $request){
    //     $getdata = UserModel::where(['email'=>$request->email,'password'=>$request->password]);
    // }

    // public function registration(){
    //     return view('Admin.registration');
    // }

    // public function regins(){
    //     return view('');
    // }
}
