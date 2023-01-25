<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function addUser(Request $request){
        $request->validate(
            [
            
            'title'  => 'required',
            'firstName' => 'required',
            'lasstName' => 'required',
            'otherName' => 'required',
            'membershipID' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'chapter' => 'required',
            'address' => 'required',
            'password' => 'required',
            ]
            );
        $user = User::create([
            'title'  => $request->title,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'otherName' => $request->otherName,
            'membershipID' => $request->membershipID,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'chapter' => $request->chapter,
            'address' => $request->address,
            'imageURL' => $request->image,
            'password' => Hash::make($request->password),
        ]);
        if($user){
            return view('dashboard.addUser');
        }

    }
}
