@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Resume</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Edit Resume</li>
            </ol>
        </nav>
    </div>

    @if ($errors->any())
        <div>
            <p class="text-danger">{{ $errors->first() }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="card-title my-auto">Edit Data Resume</h5>
            <form method="POST" action="{{ route('resume.update') }}">
                @csrf
                @method('put')
                <!-- Email input -->
                <input type="text" name="id" value="{{ $resume->id }}" hidden>
                <div class="form-outline mb-4">
                    <input value="{{ $resume->year }}" type="text" name="year" id="tahun1" class="form-control" />
                    <label class="form-label" for="tahun1">Tahun</label>
                </div>


                <div class="form-outline mb-4">
                    <input value="{{ $resume->school_name }}" type="text" name="school_name" id="nama_sekolah"
                        class="form-control" />
                    <label class="form-label" for="nama_sekolah">Nama Sekolah</label>
                </div>

                <div class="form-outline mb-4">
                    <input value="{{ $resume->school_type }}" type="text" name="school_type" id="jenis_sekolah"
                        class="form-control" />
                    <label class="form-label" for="jenis_sekolah">Tingkatan Sekolah</label>
                </div>
                <div class="form-outline mb-4">
                    <input value="{{ $resume->description }}" type="text" name="description" id="penjelasan"
                        class="form-control" />
                    <label class="form-label" for="penjelasan">Penjelasan</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Edit Resume</button>
            </form>
        </div>
    </div>
@endsection
