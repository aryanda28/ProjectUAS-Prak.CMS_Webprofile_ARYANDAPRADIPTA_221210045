@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Resume</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Edit Home</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title my-auto">Edit Home</h5>
            <form method="POST" action="{{ route('home.update', $home->id) }}" enctype="multipart/form-data">
                @csrf
                <!-- Title1 input -->
                <div class="form-outline mb-4">
                    <input type="text" name="title1" id="title1" class="form-control"
                        value="{{ $home->title1 ?? '' }}" />
                    <label class="form-label" for="title1">Title 1</label>
                </div>
                <!-- Title2 input -->
                <div class="form-outline mb-4">
                    <input type="text" name="title2" id="title2" class="form-control"
                        value="{{ $home->title2 ?? '' }}" />
                    <label class="form-label" for="title2">Title 2</label>
                </div>
                <!-- Title3 input -->
                <div class="form-outline mb-4">
                    <input type="text" name="title3" id="title3" class="form-control"
                        value="{{ $home->title3 ?? '' }}" />
                    <label class="form-label" for="title3">Title 3</label>
                </div>
                <!-- Button Left input -->
                <div class="form-outline mb-4">
                    <input type="text" name="button_left" id="button_left" class="form-control"
                        value="{{ $home->button_left ?? '' }}" />
                    <label class="form-label" for="button_left">Button Left</label>
                </div>
                <!-- Button Right input -->
                <div class="form-outline mb-4">
                    <input type="text" name="button_right" id="button_right" class="form-control"
                        value="{{ $home->button_right ?? '' }}" />
                    <label class="form-label" for="button_right">Button Right</label>
                </div>
                <!-- About Me Title input -->
                <div class="form-outline mb-4">
                    <input type="text" name="about_me_title" id="about_me_title" class="form-control"
                        value="{{ $home->about_me_title ?? '' }}" />
                    <label class="form-label" for="about_me_title">About Me Title</label>
                </div>
                <!-- About Me Description input -->
                <div class="form-outline mb-4">
                    <textarea name="about_me_description" id="about_me_description" class="form-control" rows="4">{{ $home->about_me_description ?? '' }}</textarea>
                    <label class="form-label" for="about_me_description">About Me Description</label>
                </div>
                <!-- Image Path input (optional) -->
                <div class="form-outline mb-4">
                    <!-- Display current image if exists -->
                    @if (isset($home->image_path))
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $home->image_path) }}" alt="Current Image"
                                style="max-width: 100px; max-height: 100px;">
                        </div>
                    @endif
                    <input type="file" name="image_path" id="image_path" class="form-control" />
                    <label class="form-label" for="image_path">Image Path (optional)</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Edit Resume</button>
            </form>
        </div>
    </div>
@endsection
