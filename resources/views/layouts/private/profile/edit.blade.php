@extends('layouts.private.dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Edit Profil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.html">Dasbor</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="profil.html">Profil</a>
                </li>
                <li class="breadcrumb-item active">Edit Profil</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- Columns -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-start justify-content-between">
                        <h5 class="card-title my-auto">Edit Data Profil</h5>
                    </div>
                    <div class="card-body d-flex flex-column flex-md-row align-items-start justify-content-between">

                        <div class="col-12  text-md-start d-md-block">
                            <h5 class="card-title">Detail Data Profil</h5>
                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Nama Lengkap:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->name }}" class="form-control" name="name"
                                            type="text" placeholder="Nama Lengkap" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Link Twitter:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->link_twitter }}" class="form-control" name="link_twitter"
                                            type="text" placeholder="Link Twitter" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Link LinkedIn:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->link_linkedin }}" class="form-control" name="link_linkedin"
                                            type="text" placeholder="Link LinkedIn" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Link Github:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->link_github }}" class="form-control" name="link_github"
                                            type="text" placeholder="Link Github" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Nomor Telepon:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->telepon }}" class="form-control" name="telepon"
                                            type="text" placeholder="Nomor Telepon" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Alamat Email:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->email }}" class="form-control" name="email"
                                            type="text" placeholder="Alamat Email" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Link Footer:</label>
                                    <div class="col-lg-8">
                                        <input value="{{ $user->link_footer }}" class="form-control" name="link_footer"
                                            type="text" placeholder="Link Footer" />
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-start justify-content-between pt-3">
                                    <label class="col-lg-4 control-label my-auto">Alamat Email:</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" name="about" id="" cols="3" rows="3">{{ $user->about }}</textarea>
                                    </div>
                                </div>


                                <div class="d-flex flex-md-row flex-column justify-content-end gap-2 pt-3">
                                    <button type="button" class="btn btn-secondary mb-md-0 mb-2">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
