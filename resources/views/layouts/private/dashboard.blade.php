@extends('layouts.private.app')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            {{-- Welcome to dashboard --}}
            <div class="card-header d-flex align-items-start justify-content-between">
                <h5 class="card-title my-auto">Welcome to Dashboard</h5>
            </div>
        </div>
    </section>
@endsection
