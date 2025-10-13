<?php

namespace App\Http\Controllers;

use Illuminate\Suppoert\Facades\Auth;   
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = auth()->user()->usertype;

        if($usertype=='0'){
            return view('admin.dashboard');
        }
        else{
            return view('dashboard');
        }
    }
}
