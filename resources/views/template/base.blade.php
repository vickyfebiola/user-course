<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <title>Practice MTM</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12" >
                    <nav class="navbar navbar-expand-lg navbar-light bg-light border" style="justify-content: flex-end;">
                        <a class="navbar-brand mr-auto" href="https://mtm.id">
                            <img src="{{ asset('img/mtm-logo-1.png') }}" alt="PT Media Telekomunikasi Mandiri" style="width:42px;height:42px;">
                            PT Media Telekomunikasi Mandiri
                        </a>
                        <div>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('data.index') }}">Beranda <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('soal') }}">Soal</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Database
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('member.index') }}">Members</a>
                                        <a class="dropdown-item" href="{{ route('course.index') }}">Courses</a>
                                        <a class="dropdown-item" href="{{ route('mentor.index') }}">Mentors</a>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

        <!-- Load File Main JS -->
        @yield('script')
    </body>
</html>