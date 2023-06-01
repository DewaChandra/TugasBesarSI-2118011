<!doctype html>
<html lang="en">

<head>
    @include('templates.partials.header')
</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('templates.partials.sidebar')
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Selamat Datang Admin
                            </div>
                            <h2 class="page-title">
                                Selamat Bekerja dan Semangat!!
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <!-- Feedback User -->
                    @include('templates.partials.alert')
                    <!-- Isi Konten -->
                    @yield('content')
                </div>
            </div>
            @include('templates.partials.footer')
        </div>
    </div>
    @include('templates.partials.scripts')
</body>

</html>