<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
    public function redirects() {
        // return view('home');
        $usertype=Auth::user()->usertype; 
        if($usertype=='1'){
            return view('admin.adminhome');
        }
        else{
            return view('home');
        }
    }
}
