<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('layouts.private.home.index', compact('homes'));
    }

    public function create()
    {
        return view('layouts.private.home.create');
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'title1' => 'required|string',
                'title2' => 'required|string',
                'title3' => 'required|string',
                'button_left' => 'required|string',
                'button_right' => 'required|string',
                'about_me_title' => 'required|string',
                'about_me_description' => 'required|string',
                'image_path' => 'nullable|image', // Validate if the image is present and is an actual image
            ]);

            $home = new Home; // Assuming your model is Home
            $home->title1 = $request->title1;
            $home->title2 = $request->title2;
            $home->title3 = $request->title3;
            $home->button_left = $request->button_left;
            $home->button_right = $request->button_right;
            $home->about_me_title = $request->about_me_title;
            $home->about_me_description = $request->about_me_description;

            if ($request->hasFile('image_path')) {
                $imagePath = $request->file('image_path')->store('uploads', 'public');
                $home->image_path = $imagePath;
            }

            $home->save();

            return redirect()->route('home.index')->with('success', 'Home content created successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function edit(Home $home)
    {
        return view('layouts.private.home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title1' => 'required|string',
            'title2' => 'required|string',
            'title3' => 'required|string',
            'button_left' => 'required|string',
            'button_right' => 'required|string',
            'about_me_title' => 'required|string',
            'about_me_description' => 'required|string',
            'image_path' => 'nullable|image', // Validate if the image is present and is an actual image
        ]);

        $home = Home::findOrFail($id); // Assuming your model is Home
        $home->title1 = $request->title1;
        $home->title2 = $request->title2;
        $home->title3 = $request->title3;
        $home->button_left = $request->button_left;
        $home->button_right = $request->button_right;
        $home->about_me_title = $request->about_me_title;
        $home->about_me_description = $request->about_me_description;

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('uploads', 'public');
            $home->image_path = $imagePath;
        }

        $home->save();

        return redirect()->route('home.index')->with('success', 'Home content updated successfully.');
    }

    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $home->delete();

        return redirect()->route('home.index')->with('success', 'Home content deleted successfully.');
    }
}
