<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('layouts.public.resume', compact('resumes'));
    }

    public function indexDash()
    {
        $resumes = Resume::all();
        return view('layouts.private.resume.index', compact('resumes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'school_name' => 'required',
            'school_type' => 'required',
            'description' => 'required',

        ]);
        Resume::create($request->all());

        return redirect()->route('resume.index');
    }

    public function edit($id)
    {
        $resume = Resume::find($id);
        return view('layouts.private.resume.edit', compact('resume'));
    }

    public function update(Request $request)
    {
        $resume = Resume::find($request->id);
       
        $request->validate([
            'year' => 'required',
            'school_name' => 'required',
            'school_type' => 'required',
            'description' => 'required',

        ]);

        $resume->update($request->all());

        return redirect()->route('resume.index');
    }

    public function destroy($id)
    {
        $resume = Resume::find($id);
        $resume->delete();

        return redirect()->route('resume.index');
    }
}
