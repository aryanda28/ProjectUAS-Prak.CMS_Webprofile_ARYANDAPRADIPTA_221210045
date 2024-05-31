<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = UserProfile::find(1);
        return view('layouts.public.home', compact('data'));
    }
}
