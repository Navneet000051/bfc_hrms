<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
class ForgotPasswordController extends Controller
{
    
    public function showForgetPasswordForm()
    {
        return view('Admin.forget-password');
    }

 
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

       
        if (UserModel::where('email', $request->email)->update([
            'email' => $request->email,
            'remember_token' => $token,
            'updated_at' => Carbon::now()
        ])) {
            if (Mail::send('Admin.forgetPassword', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            })) {

                return back()->with('message', 'We have e-mailed your password reset link!');
            } else {
                return back()->with('message', 'Retry Again');
            }
        } else {
            return back()->with('message', 'Try Again');
        }
    }
 
    public function showResetPasswordForm($token)
    {
        return view('Admin.forgetPasswordLink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::exists('users')->where(function ($query) use ($request) {
                    return $query->where('email', $request->email)
                        ->where('remember_token', $request->token);
                }),
            ],
            'password' => 'required|string|min:5|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('users')
            ->where([
                'email' => $request->email,
                'remember_token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = UserModel::where('email', $request->email)
            ->update(['password' => Hash::make($request->password),'remember_token'=>'']);


        return redirect('/')->with('success', 'Your password has been changed!');
    }
}
