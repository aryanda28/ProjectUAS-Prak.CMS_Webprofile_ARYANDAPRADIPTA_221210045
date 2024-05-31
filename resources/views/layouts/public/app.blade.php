<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/public/css/styles.css') }}" rel="stylesheet" />

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">Aryanda
                        Pradipta</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('resume') }}">Resume</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" href="">Login</a></li>

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
                                        <form method="POST" action="{{ route('authenticate') }}">
                                            @csrf
                                            @method('POST')
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" name="email" id="email1"
                                                    class="form-control" />
                                                <label class="form-label" for="email1">Email address</label>
                                            </div>

                                            <!-- password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="password1"
                                                    class="form-control" />
                                                <label class="form-label" for="password1">Password</label>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- About Section-->
        @yield('content')
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                @php
                    $data = App\Models\UserProfile::first();
                @endphp
                <a href=" {{ $data->link_footer }}">
                    <div class="small m-0 text-center">Copyright &copy; Aryanda Pradipta 2024</div>
                </a>


            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/public/js/scripts.js') }}"></script>
</body>

</html>
