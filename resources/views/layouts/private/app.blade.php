<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    {{-- <link href="assets/img/logo_blue.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/private/assets/vendor/simple-datatables/style.css') }}">



    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/private/assets/css/style.css') }}">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.svg" alt="" />
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto me-3">
            <ul class="d-flex align-items-center">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block ps-2 me-3">Admin</span>
                    <i class="bi bi-person-circle"></i>
                </a>
                <!-- End Profile Iamge Icon -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar d-flex flex-column justify-content-between">
        <ul class="sidebar-nav" id="sidebar-nav">
            <!-- Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- <!-- Data Data Profile Nav -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile') ? '' : 'collapsed' }}"
                    href="{{ route('profile.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Data Profile</span>
                </a>
            </li>

            <!-- Data Data User Nav -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user') ? '' : 'collapsed' }}" href="{{ route('user.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Data User</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? '' : 'collapsed' }}" href="{{ route('home.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Data User</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('resume-dash') ? '' : 'collapsed' }}"
                    href="{{ route('resume.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Data Resume</span>
                </a>
            </li>


        </ul>
        <a href="{{ route('logout') }}">
            <button class="rounded bg-danger text-white p-1">Log Out</button>
        </a>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('content')

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer"></footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> --}}
    {{-- <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script> --}}

    <script src="{{ asset('assets/private/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/private/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

    <script src="{{ asset('assets/private/assets/js/main.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
