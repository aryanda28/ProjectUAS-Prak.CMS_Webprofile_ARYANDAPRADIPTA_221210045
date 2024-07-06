@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Edit Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Home</li>
            </ol>
        </nav>
    </div>

    @if ($errors->any())
    <div>
        <p class="text-danger">{{$errors->first()}}</p>
    </div>
@endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Home</h5>
            <form method="POST" action="{{ route('home.update', $home->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Main Title input -->
                <div class="form-group">
                    <label for="main_title">Main Title</label>
                    <input type="text" name="main_title" id="main_title" class="form-control"
                        value="{{ old('main_title', $home->main_title) }}" required>
                </div>

                <!-- Subtitle1 input -->
                <div class="form-group">
                    <label for="subtitle1">Subtitle 1</label>
                    <input type="text" name="subtitle1" id="subtitle1" class="form-control"
                        value="{{ old('subtitle1', $home->subtitle1) }}" required>
                </div>

                <!-- Subtitle2 input -->
                <div class="form-group">
                    <label for="subtitle2">Subtitle 2</label>
                    <input type="text" name="subtitle2" id="subtitle2" class="form-control"
                        value="{{ old('subtitle2', $home->subtitle2) }}" required>
                </div>

                <!-- Left Button Text input -->
                <div class="form-group">
                    <label for="left_button_text">Left Button Text</label>
                    <input type="text" name="left_button_text" id="left_button_text" class="form-control"
                        value="{{ old('left_button_text', $home->left_button_text) }}" required>
                </div>

                <!-- Right Button Text input -->
                <div class="form-group">
                    <label for="right_button_text">Right Button Text</label>
                    <input type="text" name="right_button_text" id="right_button_text" class="form-control"
                        value="{{ old('right_button_text', $home->right_button_text) }}" required>
                </div>

                <!-- About Me Section Title input -->
                <div class="form-group">
                    <label for="about_me_section_title">About Me Section Title</label>
                    <input type="text" name="about_me_section_title" id="about_me_section_title" class="form-control"
                        value="{{ old('about_me_section_title', $home->about_me_section_title) }}" required>
                </div>

                <!-- About Me Section Description input -->
                <div class="form-group">
                    <label for="about_me_section_description">About Me Section Description</label>
                    <textarea name="about_me_section_description" id="about_me_section_description" class="form-control" rows="4"
                        required>{{ old('about_me_section_description', $home->about_me_section_description) }}</textarea>
                </div>

                <!-- Image Path input (optional) -->
                <div class="form-group">
                    <label for="image_path">Image Path (optional)</label>
                    <!-- Display current image if exists -->
                    @if (isset($home->image_path))
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $home->image_path) }}" alt="Current Image"
                                style="max-width: 100px; max-height: 100px;">
                        </div>
                    @endif
                    <input type="file" name="image_path" id="image_path" class="form-control">
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary">Update Home</button>
            </form>
        </div>
    </div>
@endsection
