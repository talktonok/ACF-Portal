<?php

namespace App\Http\Controllers;

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
        return view('dashboard.users');
    }

    public function chapters()
    {
        return view('dashboard.chapters');
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
}
