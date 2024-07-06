@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Data Home</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- Columns -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="card-title col-12 col-md-6 text-md-start">
                            <p>Data Home</p>
                        </div>
                        <div class="col-12 col-md-6 text-md-end mt-2 mb-2 d-grid gap-2 d-md-block">
                            <a href="{{ route('home.create') }}" class="btn btn-success btn-sm" type="button">
                                <i class="bi bi-plus"></i>
                                <span class="ms-1">Tambah Home</span>
                            </a>


                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Main Title</th>
                                        <th scope="col">Subtitle 1</th>
                                        <th scope="col">Subtitle 2</th>
                                        <th scope="col">ButtonLeft</th>
                                        <th scope="col">ButtonRight</th>
                                        <th scope="col">AboutMeTitle</th>
                                        <th scope="col">AboutMeDescription</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($homes as $home)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $home->main_title }}</td>
                                            <td>{{ $home->subtitle1 }}</td>
                                            <td>{{ $home->subtitle2 }}</td>
                                            <td>{{ $home->left_button_text }}</td>
                                            <td>{{ $home->right_button_text }}</td>
                                            <td>{{ $home->about_me_section_title }}</td>
                                            <td>{{ $home->about_me_section_description }}</td>
                                            <td>
                                                <img height="100px" src="{{ asset('storage/' . $home->image_path) }}"
                                                    alt="no imate">
                                            </td>
                                            <td>

                                                <a href="{{ route('home.edit', $home) }}" class="btn btn-warning btn-sm"
                                                    title="Edit Data">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <form action="{{ route('home.destroy', $home) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" title="Delete Data"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
