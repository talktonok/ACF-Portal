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
            
            // 'title'  => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'otherName' => 'required',
            // 'membershipID' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'chapter_id' => 'required',
            'address' => 'required',
            ]
            );
            $chapterID = $request->chapter_id;
            $religion = $request->religion;
            $role = strtolower($request->role);

        $user = User::create([
            'title'  => $request->title,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'otherName' => $request->otherName,
            'membershipID' => $request->membershipID,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'chapter' => $chapterID,
            'gender' => $request->gender,
            'religion' => $religion,
            'chapter' => $request->chapter_id,
            'address' => $request->address,
            'imageURL' => $request->image,
            'password' => Hash::make($request->firstName),
        ])->save();
        if($user){
            $user->assignRole($role);
            return view('dashboard.addUser');//response()->json($user, 200);//
        }else{
            return response()->json(["message" => "record not stored"], 404);
        }

    }
}
