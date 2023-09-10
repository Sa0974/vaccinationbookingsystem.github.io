<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    Public function index(){
        $role=Auth::user()->role;

        if($role=='1')
        {
            return view('pages/admin');
        }
        if($role=='2')
        {
            return view('pages/hospital');
        }
        else
        {
            return view('pages/user');
        }
    }
}
