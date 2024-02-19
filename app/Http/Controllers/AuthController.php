<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\LogActivityHelper;

class AuthController extends Controller
{
    public function index()
    {
        return view('include.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (DB::table('users')->where('email', $request->email)->count() > 0) {


            $user = DB::table('users')->where('email', $request->email)->first();
            $status = $user->status;

            if ($status == 1) {
                if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // dd(Auth::id());
                    LogActivityHelper::loginActivities($user->id);
                    Session::flash('success', 'Login successfully.');
                    return redirect()->route('dashboard'); // Redirect to the Dashboard route 
                } else {
                    return redirect('/')->with('error', 'Please enter correct password');
                } 
            } else {
                return redirect('/')->with('warning', 'Your Account is inactive');
            }
        } else {
            return redirect('/')->with('error', 'Please enter correct email');
        }
    }
   
    public function registration()
    {
        return view('Admin.registration');
    }

    public function regins()
    {
        return view('');
    }
}
