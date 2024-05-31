<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('layouts.private.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('layouts.private.user.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);
        if ($request->password == null) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }


        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
