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

    <div class="card">
        <div class="card-header">
            <h5 class="card-title my-auto">Edit Data Resume</h5>
            <form method="POST" action="{{ route('resume.update') }}">
                @csrf
                @method('put')
                <!-- Email input -->
                <input type="text" name="id" value="{{ $resume->id }}" hidden>
                <div class="form-outline mb-4">
                    <input value="{{ $resume->tahun }}" type="text" name="tahun" id="tahun1" class="form-control" />
                    <label class="form-label" for="tahun1">Tahun</label>
                </div>


                <div class="form-outline mb-4">
                    <input value="{{ $resume->nama_sekolah }}" type="text" name="nama_sekolah" id="nama_sekolah"
                        class="form-control" />
                    <label class="form-label" for="nama_sekolah">Nama Sekolah</label>
                </div>

                <div class="form-outline mb-4">
                    <input value="{{ $resume->jenis_sekolah }}" type="text" name="jenis_sekolah" id="jenis_sekolah"
                        class="form-control" />
                    <label class="form-label" for="jenis_sekolah">Tingkatan Sekolah</label>
                </div>
                <div class="form-outline mb-4">
                    <input value="{{ $resume->penjelasan }}" type="text" name="penjelasan" id="penjelasan"
                        class="form-control" />
                    <label class="form-label" for="penjelasan">Penjelasan</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Edit Resume</button>
            </form>
        </div>
    </div>
@endsection
