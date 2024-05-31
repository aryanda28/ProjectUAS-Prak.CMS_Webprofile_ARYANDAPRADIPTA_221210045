@extends('layouts.private.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title my-auto">Edit Data User</h5>
            <form method="POST" action="{{ route('user.update') }}">
                @csrf
                @method('put')
                <!-- Email input -->
                <input type="text" name="id" value="{{ $user->id }}" hidden>
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="email1" value="{{ $user->email }}" class="form-control" />
                    <label class="form-label" for="email1">Email</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name1" class="form-control" value="{{ $user->name }}" />
                    <label class="form-label" for="name">Nama</label>
                </div>

                <!-- password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="password1" class="form-control" />
                    <label class="form-label" for="password1">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Edit Akun</button>
            </form>
        </div>
    </div>
@endsection
