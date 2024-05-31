@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Data User</li>
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
                            <p>Data User</p>
                        </div>
                        <div class="col-12 col-md-6 text-md-end mt-2 mb-2 d-grid gap-2 d-md-block">
                            <a href="" class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class="bi bi-plus"></i>
                                <span class="ms-1">Tambah User</span>
                            </a>

                            <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content w-75">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Sign in</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form method="POST" action="{{ route('resume.store') }}">
                                                @csrf
                                                @method('POST')

                                                <div class="form-outline mb-4">
                                                    <input type="text" name="tahun" id="tahun1"
                                                        class="form-control" />
                                                    <label class="form-label" for="tahun1">Tahun</label>
                                                </div>


                                                <div class="form-outline mb-4">
                                                    <input type="text" name="nama_sekolah" id="nama_sekolah"
                                                        class="form-control" />
                                                    <label class="form-label" for="nama_sekolah">Nama Sekolah</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="text" name="jenis_sekolah" id="jenis_sekolah"
                                                        class="form-control" />
                                                    <label class="form-label" for="jenis_sekolah">Tingkatan Sekolah</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                    <input type="text" name="penjelasan" id="penjelasan"
                                                        class="form-control" />
                                                    <label class="form-label" for="penjelasan">Penjelasan</label>
                                                </div>


                                                <button type="submit" class="btn btn-primary btn-block">Tambah
                                                    Data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Nama Sekolah</th>
                                        <th scope="col">Tingkatan Sekolah</th>
                                        <th scope="col">Penjelasan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resumes as $resume)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $resume->tahun }}</td>
                                            <td>{{ $resume->nama_sekolah }}</td>
                                            <td>{{ $resume->jenis_sekolah }}</td>
                                            <td>{{ $resume->penjelasan }}</td>


                                            <td>
                                                <a href="{{ route('resume.edit', $resume->id) }}"
                                                    class="btn btn-warning btn-sm" title="Edit Data">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <a href="{{ route('resume.destroy', $resume->id) }}"
                                                    class="btn btn-danger btn-sm delete-btn deleteTeacher">
                                                    <i class="bi bi-trash"></i>
                                                </a>

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
