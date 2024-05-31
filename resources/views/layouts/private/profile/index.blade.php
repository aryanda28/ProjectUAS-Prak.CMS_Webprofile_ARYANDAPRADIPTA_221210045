@extends('layouts.private.dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Profil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.html">Dasbor</a>
                </li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- Columns -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-start justify-content-between">
                        <h5 class="card-title my-auto">Data Profil</h5>
                        <a href="{{ route('profile.edit') }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pen"></i>
                            <span class="ms-1">Edit Profil</span>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column flex-md-row align-items-start justify-content-between">

                        <div class="col-12  text-md-start d-grid gap-2 d-md-block">
                            <table class="table table-divider mt-2 p-4" id="datatable">
                                <tbody>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Link Twitter</td>
                                        <td>:</td>
                                        <td>{{ $user->link_twitter }}</td>
                                    </tr>
                                    <tr>
                                        <td>Link LinkedIn</td>
                                        <td>:</td>
                                        <td>{{ $user->link_linkedin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Link Github</td>
                                        <td>:</td>
                                        <td>{{ $user->link_github }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td>:</td>
                                        <td>{{ $user->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Email</td>
                                        <td>:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Link Footer</td>
                                        <td>:</td>
                                        <td>{{ $user->link_footer }}</td>
                                    </tr>
                                    <tr>
                                        <td>About Me : </td>
                                        <td>:</td>
                                        <td>{{ $user->about }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
