<?php

namespace App\Http\Controllers;

use App\Mail\RegisteredMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class UserController extends Controller
{
    //

    public function addUser(Request $request){
        $request->validate(
            [
            
            // 'title'  => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
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
            $dob = Carbon::parse($request->dob)->format('Y-m-d');

            $attributes = [
                'title'  => $request->title,
                'name' => $request->firstName,
                'lastName' => $request->lastName,
                'otherName' => $request->otherName,
                'membershipID' => $request->membershipID,
                'email' => $request->email,
                'phone' => $request->phone,
                'dob' => $dob,
                'chapter' => $chapterID,
                'gender' => $request->gender,
                'religion' => $religion,
                'chapter' => $request->chapter_id,
                'address' => $request->address,
                'imageURL' => $request->image,
                'password' => Hash::make($request->firstName),
            ];
        $user = User::updateOrCreate(
            ['email' => $request->email],
            $attributes
        );
        if($user){
            $user->assignRole($role);
            // Mail::to($user->email)
            //              ->send(new RegisteredMail($user));
            return view('dashboard.addUser');//response()->json($user, 200);//
        }else{
            return response()->json(["message" => "record not stored"], 404);
        }

    }
}
