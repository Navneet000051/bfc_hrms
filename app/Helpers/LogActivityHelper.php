<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\LogActivity;
use App\Models\LoginActivity;
//composer require jenssegers/agent
use Jenssegers\Agent\Facades\Agent;
use Carbon\Carbon;

class LogActivityHelper
{
    public static $datatime;

    public static function initializeDatetime()
    {
        date_default_timezone_set("Asia/Kolkata");
        self::$datatime = date('Y-m-d h:i:s a');
    }

    public static function loginActivities($userid)
    {
        // dd($userid);
        self::initializeDatetime(); 
        $LogActivity = new LoginActivity;
        $LogActivity->ip = Request::ip();
        $LogActivity->agent = Request::header('user-agent');
        $LogActivity->userid = $userid;
        $LogActivity->created_at = self::$datatime;
        $LogActivity->updated_at = self::$datatime;
        $LogActivity->save();
       
    }
    public static function addToLog($subject)
    {
        // $browser = Agent::browser();
        // $version = Agent::version($browser);
        // $platform = Agent::platform();
        // $platformversion = Agent::version($platform);
        // Agent::isRobot();
        // $device = Agent::device();
        self::initializeDatetime(); 
        $LogActivity = new LogActivity;
        $LogActivity->subject = $subject;
        $LogActivity->url = Request::fullUrl();
        $LogActivity->method = Request::method();
        $LogActivity->ip = Request::ip();
        $LogActivity->agent = Request::header('user-agent');
        $LogActivity->userid = auth()->check() ? auth()->user()->id : 0;
        $LogActivity->username = auth()->check() ? auth()->user()->name : 'null';
        $LogActivity->role = auth()->check() ? auth()->user()->role_id : 0;
        $LogActivity->created_at = self::$datatime;
        $LogActivity->updated_at = self::$datatime;
        $LogActivity->save();
       
    }
}
