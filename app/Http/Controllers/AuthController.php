<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\roles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\LogActivityHelper;
use App\Models\smtpSetting;
use App\Models\mailTemplate;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Part\HtmlPart;
use Illuminate\Mail\Message;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;

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
                   if($mailTemplate = mailTemplate::where(['title'=>'login','status'=>1])->first()){
                    //send email using smtp
                  $roledata = roles::where('id',$user->role_id)->first();
                    $smtpSetting = smtpSetting::first();
                    $smtpHost = $smtpSetting->host;
                    $smtpPort = $smtpSetting->port;
                    $smtpUsername = $smtpSetting->username;
                    $smtpPassword = $smtpSetting->password;
                    $smtpEncryption = 'tls';
                    
                    $toEmail = $request->email;
                    $subject = $mailTemplate->subject;
                    $message = $mailTemplate->body;

                    $role = $roledata->name;
                    $name = $user->name;
                    $email = $user->email;
                    $company = 'BFC SOFTTECH';
                    $companyemail = $smtpSetting->username;

                         // Replace placeholders with actual values in the message body
                         $message = str_replace('{{name}}', $name, $message);
                         $message = str_replace('{{email}}', $email, $message);
                         $message = str_replace('{{company name}}', $company, $message);
                         $message = str_replace('{{company email}}', $companyemail, $message);
                         $message = str_replace('{{company email}}', $companyemail, $message);
                         $message = str_replace('{{role}}', $role, $message);
                    // Create SMTP transport
                    $transport = (new Swift_SmtpTransport($smtpHost, $smtpPort, $smtpEncryption))
                        ->setUsername($smtpUsername)
                        ->setPassword($smtpPassword);

                    // Create the Mailer using your created Transport
                    $mailer = new Swift_Mailer($transport);

                    // Create a message
                    $emailMessage = (new Swift_Message($subject))
                        ->setFrom([$smtpUsername => $companyemail]) // Sender's email address and name
                        ->setTo([$toEmail])
                        ->setBody($message);

                    // Send the message
                    $result = $mailer->send($emailMessage);

                    if ($result) {
                        echo 'Mail sent successfully';
                    } else {
                        echo 'Failed to send mail';
                    }
                }
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
