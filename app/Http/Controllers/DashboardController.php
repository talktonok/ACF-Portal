<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return ;//view('home');
    }

    public function members()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function chapters()
    {
        return view('dashboard.chapters');
    }
    public function addChapters()
    {
        return view('dashboard.addChapter');
    }
    
    public function excos()
    {
        return view('dashboard.leadership');
    }
    public function events()
    {
        return view('dashboard.events');
    }

    public function addMember()
    {
        return view('dashboard.addUser');
    }

    public function addAdmin()
    {
        $admin = 'Admin';
        return view('dashboard.addUser', compact('admin'));
    }

    public function getAllAdmin()
    {
        $users = User::role('admin')->get();
        return view('dashboard.users', compact('users'));
    }
    public function getAllMemebers()
    {
        $users = User::role('member')->get();
        return view('dashboard.users', compact('users'));
    }
    
    public function getMember($id, Request $request)
    {
        $users = User::find($id);
        if($users){
            return view('dashboard.addUser', compact('users'));

        }
        return view('error');
    }
}
