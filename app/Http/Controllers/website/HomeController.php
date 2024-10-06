<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->user_type == 'user')
        {
            return view('website.home.home');
        }
        else
        {
            return view('website.home.admin-home');
        }

    }

    public function personalRecord()
    {

        return view('website.home.personal-record');
    }
}
