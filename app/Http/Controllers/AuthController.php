<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('Admin.index');
    }
   
    public function login(Request $request){
        $validatedData = Validator::make($request->all(),[
           $email = $request->email,
           $password = $request->password
        ]);
        if($validatedData->passes()){
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            // dd(Auth::attempt($credentials));die();
       if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
        echo "hii"; die();
        // Session::flash('success', 'Login successfully.');
        // return redirect()->route('dashboard'); // Redirect to the Dashboard route 
       }
        }
    }

    public function registration(){
        return view('Admin.registration');
    }

    public function regins(){
        return view('');
    }
}
