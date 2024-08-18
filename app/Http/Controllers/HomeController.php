<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='Admin'){
            return view('Admin.Dashboard');
        }
        elseif($role=='User'){
            return view('Operation.dashboard');
        }
    }
}
