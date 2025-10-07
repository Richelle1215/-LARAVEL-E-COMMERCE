<?php

namespace App\Http\Controllers;

use Illuminate\Suppoert\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = auth()->user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('dashboard');
        }
    }
}
