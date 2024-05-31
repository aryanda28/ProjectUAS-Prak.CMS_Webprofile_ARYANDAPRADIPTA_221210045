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
                                            <form method="POST" action="{{ route('user.store') }}">
                                                @csrf
                                                @method('POST')
                                                <!-- Email input -->
                                                <div class="form-outline mb-4">
                                                    <input type="email" name="email" id="email1"
                                                        class="form-control" />
                                                    <label class="form-label" for="email1">Email</label>
                                                </div>
                                                <!-- Email input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" name="name" id="name1"
                                                        class="form-control" />
                                                    <label class="form-label" for="name">Nama</label>
                                                </div>

                                                <!-- password input -->
                                                <div class="form-outline mb-4">
                                                    <input type="password" name="password" id="password1"
                                                        class="form-control" />
                                                    <label class="form-label" for="password1">Password</label>
                                                </div>

                                                <!-- Submit button -->
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
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                            <td>

                                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm"
                                                    title="Edit Data">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <a href="{{ route('user.destroy', $user->id) }}"
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
