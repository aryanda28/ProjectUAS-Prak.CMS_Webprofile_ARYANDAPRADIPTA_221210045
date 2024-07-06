@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Resume</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Create Home</li>
            </ol>
        </nav>
    </div>

    
    @if ($errors->any())
        <div>
            <p class="text-danger">{{$errors->first()}}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="card-title my-auto">Create Home</h5>
            <form method="POST" action="{{ route('home.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4">
                    <input type="text" name="main_title" id="title1" class="form-control" />
                    <label class="form-label" for="title1">Main Title</label>
                </div>
                <!-- Title2 input -->
                <div class="form-outline mb-4">
                    <input type="text" name="subtitle1" id="title2" class="form-control" />
                    <label class="form-label" for="title2">Subtitle 1</label>
                </div>
                <!-- Title3 input -->
                <div class="form-outline mb-4">
                    <input type="text" name="subtitle2" id="title3" class="form-control" />
                    <label class="form-label" for="title3">Subtitle 2</label>
                </div>
                <!-- Button Left input -->
                <div class="form-outline mb-4">
                    <input type="text" name="left_button_text" id="button_left" class="form-control" />
                    <label class="form-label" for="button_left">Button Left Text</label>
                </div>
                <!-- Button Right input -->
                <div class="form-outline mb-4">
                    <input type="text" name="right_button_text" id="button_right" class="form-control" />
                    <label class="form-label" for="button_right">Button Right Text</label>
                </div>
                <!-- About Me Title input -->
                <div class="form-outline mb-4">
                    <input type="text" name="about_me_section_title" id="about_me_title" class="form-control" />
                    <label class="form-label" for="about_me_title">About Me Title</label>
                </div>
                <!-- About Me Description input -->
                <div class="form-outline mb-4">
                    <textarea name="about_me_section_description" id="about_me_description" class="form-control" rows="4"></textarea>
                    <label class="form-label" for="about_me_description">About Me Description</label>
                </div>
                <!-- Image Path input (optional) -->
                <div class="form-outline mb-4">
                    <input type="file" name="image_path" id="image_path" class="form-control" />
                    <label class="form-label" for="image_path">Image Path (optional)</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Edit Resume</button>
            </form>
        </div>
    </div>
@endsection
