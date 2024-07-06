<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            // Validate the incoming request data
            $request->validate([
                'main_title' => 'required|string',
                'subtitle1' => 'required|string',
                'subtitle2' => 'required|string',
                'left_button_text' => 'required|string',
                'right_button_text' => 'required|string',
                'about_me_section_title' => 'required|string',
                'about_me_section_description' => 'required|string',
                'image_path' => 'nullable|image', // Validate if the image is present and is an actual image
            ]);

            // Prepare data for creation
            $data = [
                'main_title' => $request->main_title,
                'subtitle1' => $request->subtitle1,
                'subtitle2' => $request->subtitle2,
                'left_button_text' => $request->left_button_text,
                'right_button_text' => $request->right_button_text,
                'about_me_section_title' => $request->about_me_section_title,
                'about_me_section_description' => $request->about_me_section_description,
            ];

            // Handle the image upload if present
            if ($request->hasFile('image_path')) {
                $image = $request->file('image_path');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/storage/uploads'), $imageName);
                $data['image_path'] = '/uploads/' . $imageName;
            }

            // Create a new Home instance and save it to the database
            Home::create($data);

            // Redirect with a success message
            return redirect()->route('home.index')->with('success', 'Home content created successfully.');
        } catch (\Exception $e) {
            // Redirect back with an error message in case of exception
            return redirect()->back()->withErrors($e->getMessage());
        }
    }



    public function edit(Home $home)
    {
        return view('layouts.private.home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'main_title' => 'required|string',
            'subtitle1' => 'required|string',
            'subtitle2' => 'required|string',
            'left_button_text' => 'required|string',
            'right_button_text' => 'required|string',
            'about_me_section_title' => 'required|string',
            'about_me_section_description' => 'required|string',
            'image_path' => 'nullable|image', // Validate if the image is present and is an actual image
        ]);

        try {
            $home = Home::findOrFail($id); // Assuming your model is Home

            // Update data based on the validated request
            $home->update([
                'main_title' => $request->main_title,
                'subtitle1' => $request->subtitle1,
                'subtitle2' => $request->subtitle2,
                'left_button_text' => $request->left_button_text,
                'right_button_text' => $request->right_button_text,
                'about_me_section_title' => $request->about_me_section_title,
                'about_me_section_description' => $request->about_me_section_description,
            ]);

           
            if ($request->hasFile('image_path')) {
                $image = $request->file('image_path');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/storage/uploads'), $imageName);
                $data['image_path'] = '/uploads/' . $imageName;
                $home->update(
                    [
                        'image_path' => $data['image_path']
                    ]
                );
            }
            return redirect()->route('home.index')->with('success', 'Home content updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $home->delete();

        return redirect()->route('home.index')->with('success', 'Home content deleted successfully.');
    }
}
