<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class glideController extends Controller
{
    public function login(Request $request)
    {

        $credientials = DB::table('empdata')
                        ->where('email', $request->input('email'))
                        ->get()
                        ->first();

        if(isset($credientials->password)) {
            if (Hash::check($request->input('password'), $credientials->password)) {
                session(['login' => rand(100000,999999)]);
                session(['phone' => substr($credientials->phone,strlen($credientials->phone)-2)]);
                session(['email' => $credientials->email]);
                return redirect('send');
            } else {
                return redirect()->back()->withInput()->with('failed','Incorrecrt Password');
            }
        } else {
            return redirect()->back()->withInput()->with('failed','Account not yet registered');
        }
    }

    public function phone(Request $request)
    {
        $credientials = DB::table('empdata')
                        ->where('email', $request->input('email'))
                        ->get()
                        ->first();

        if(isset($credientials->email)) {
            $verifyMailCode = rand(100000,999999);
            $ResetCode =  DB::update('update empdata set resetToken = ? where email = ?', [$verifyMailCode,$request->input("email")]);

            $credientials = DB::table('empdata')
                                ->where('email', $request->input('email'))
                                ->get()
                                ->first();
            session(['send' => rand(100000,999999)]);

            session(['verifycode' => $credientials->resetToken]);
            return redirect('verify');
        }
    }

    public function code(Request $request)
    {
        $credientials = DB::table('empdata')
                        ->where('resetToken', $request->input('otp'))
                        ->get()
                        ->first();

        if(isset($credientials->resetToken)) {
            $tokendefault = DB::table('empdata')
                                    ->where('id', $credientials->id)
                                    ->update(['resetToken' => NULL]);

            session(['home' => rand(100000,999999)]);

            session(['verifycode' => $credientials->resetToken]);
            session(['firstname' => $credientials->firstname]);
            return redirect('home');
        } else {
            return redirect('logout');
        }
    }
}
