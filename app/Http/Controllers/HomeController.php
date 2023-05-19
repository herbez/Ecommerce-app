<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if ($usertype=='1') {
            # code...
            return view('admin.home');
        }else {
            # code...
            return view('dashboard');
        }
    }
}