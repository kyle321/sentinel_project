<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Illuminate\Support\Facades\Mail;

class ForgotPassword extends Controller
{
    public function forgot()
    {
        return view('authenticate.forgot-password');
    }
    public function postForgotPassword(Request $request)
    {
        $user=User::whereEmail($request->email)->first();
        $sentinelUser=Sentinel::findById($user->id);
        if(count($user)==0)
        {
            return redirect()->back()->with(['success'=>'Reset code was send successfully']);
        }
        $reminder=Reminder::exists($sentinelUser) ?: Reminder::create($sentinelUser);
        $this->sendEmail($user, $reminder->code);
        return redirect()->back()->with(['success'=>'Reset code was send successfully']);
    }
    private function sendEmail($user, $code)
    {
        Mail::send('emails.forgot-password',[
            'user'=>$user,
            'code'=>$code
        ], function($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello, $user->first_name, reset password");
        });
    }
    public function passwordReset($email, $resetCode)
    {
        $user=User::whereEmail($email)->first();
        $sentinelUser=Sentinel::findById($user->id);
        if(count($sentinelUser)==0)
            abort(404);
        if($reminder=Reminder::exists($sentinelUser))
        {
            if($resetCode==$reminder->code)
            {
                return view('authenticate.reset-password');
            }else
            {
                return redirect('/');
            }
        }else
        {
            return redirect('/');
        }
        return $user;
    }
    public function postPasswordReset(Request $request, $email, $resetCode)
    {
        $this->validate($request,['password'=>'confirmed|required|min:5',
        'password_confirmation'=>'required|min:5']);
        $user=User::whereEmail($email)->first();
        $sentinelUser=Sentinel::findById($user->id);
        if(count($sentinelUser)==0)
            abort(404);
        if($reminder=Reminder::exists($sentinelUser))
        {
            if($resetCode==$reminder->code)
            {
                Reminder::complete($sentinelUser,$resetCode, $request->password);
                return redirect('/login')->with(['success'=>'you can now log in with your new password']);
            }else
            {
                return redirect('/');
            }
        }else
        {
            return redirect('/');
        }
        return $user;
        return $request->all();
    }
}
