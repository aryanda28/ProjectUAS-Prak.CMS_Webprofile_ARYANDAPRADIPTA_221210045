@extends('layouts.public.app')
@section('content')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">

                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    @foreach ($resumes as $resume)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">{{ $resume->year }}</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">{{ $resume->school_name }}</div>

                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">{{ $resume->school_type }}</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>{{ $resume->description }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </section>
                <!-- Divider-->
                <div class="pb-5"></div>

            </div>
        </div>
    </div>
@endsection
