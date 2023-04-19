<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\registerUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerUserController extends Controller
{

    public function insertData(Request $request)
    {
        // $request->validate(
        //     [
        //         'id' => 'required|max:4',
        //         'username' => 'required',
        //         'password' => 'required|confirmed|min:8',
        //         'firstname' => 'required',
        //         'dob' => 'required',
        //         'gender' => 'required',
        //         'email' => 'required',
        //         'phone' => 'required|max:10',
        //         'qualification' => 'required',
        //         'skill-multi-select' => 'required',
        //         'country' => 'required',
        //         'state' => 'required',
        //         'city' => 'required'
        //     ]
        // );

        $email = DB::table('empdata')->where('email',$request->email)->get();

        if(count($email)>0){
            return redirect('register')->with('message','Email already registered with us')->withInput();
        }
        else{
            $phone = DB::table('empdata')->where('phone',$request->phone)->get();

            if(count($phone)>0){
                return redirect('register')->with('message','Phone already registered with us')->withInput();
            }
            else{

                $input = $request->all();
                if($request->input('skill-multi-select') != "") {
                    $skills = $input['skill-multi-select'];
                    if(count($skills) > 1) {
                        $input['empSkills'] = implode(',', $skills);
                    } else if (count($skills) == 1) {
                        $input['empSkills'] = $input['skill-multi-select'];
                    }
                } else {
                    $input['empSkills'] = "";
                }

                $selectCountry = DB::table('countries')
                                    ->where('id', $request->input("country"))
                                    ->get()
                                    ->first();

                $selectState = DB::table('states')
                                    ->where('id', $request->input("state"))
                                    ->get()
                                    ->first();
                $selectCity   = DB::table('cities')
                                    ->where('id', $request->input("city"))
                                    ->get()
                                    ->first();

                $addqualification = DB::table('studies')
                                    ->where('qualification', $request->input("qualification"))
                                    ->get()
                                    ->count();

                if($addqualification == 0) {
                    $addqualification = DB::insert('insert into studies (qualification) values (?)', [$request->input("qualification")]);
                }


                $hashedPass = Hash::make($request->input("password"), [
                                                    'memory' => 1024,
                                                    'time' => 1,
                                                    'threads' => 1,
                                                ]);

            $data = DB::insert('insert into empdata
                (
                    id,
                    username,
                    password,
                    firstname,
                    lastname,
                    dob,
                    gender,
                    email,
                    phone,
                    qualification,
                    skills,
                    phonecode,
                    country,
                    state,
                    city,
                    address,
                    zip
                ) values
                (
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?
                )',
                [
                    $request->input("id"),
                    $request->input("username"),
                    $hashedPass,
                    $request->input("firstname"),
                    $request->input("lastname"),
                    $request->input("dob"),
                    $request->input("gender"),
                    trim($request->input("email")),
                    $request->input("phone"),
                    $request->input("qualification"),
                    $input['empSkills'],
                    $selectCountry->phone_code,
                    $selectCountry->name,
                    $selectState->name,
                    $selectCity->name,
                    $request->input("address"),
                    $request->input("zip")
                ]);

                return redirect('login');
            }
        }
    }
}
