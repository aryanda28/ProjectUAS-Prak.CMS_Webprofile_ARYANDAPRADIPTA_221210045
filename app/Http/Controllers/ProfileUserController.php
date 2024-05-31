<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index()
    {
        $user = UserProfile::find(1);
        return view('layouts.private.profile.index', compact('user'));
    }

    public function edit()
    {
        $user = UserProfile::find(1);
        return view('layouts.private.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = UserProfile::find(1);
        $user->update($request->all());
        return redirect()->route('profile.index');
    }
}
