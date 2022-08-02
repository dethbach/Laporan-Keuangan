<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('storage/css/sidebar.css')}}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <title>Laporan Keuangan Service Center</title>
    <link rel="icon" type="image/png" href="{{asset('storage/web-material/logo.png')}}">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details text-light">
            <img src="{{asset('storage/web-material/logo.png')}}" class="icon" alt="" />
            <div class="logo_name ms-2">Badiklat Jateng</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">

            @if($navtitle == 'Dashboard')
            <li>
                <a href="/{{auth()->user()->role}}/dashboard" class="text-light" style="background-color: #8D93AB;">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            @else
            <li>
                <a href="/{{auth()->user()->role}}/dashboard" class="text-light">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            @endif
        </ul>
    </div>
    <section class="home-section">
        <!-- HEADER -->
        <header class="p-3 bg-light text-dark border-bottom">
            <div class="container-fluid">
                <div class="d-flex flex-wrap  align-self-baseline justify-content-between justify-content-lg-between">
                    <div class="nav-brand">
                        <h5 class="d-none d-sm-none d-xs-none d-md-block d-lg-block d-xl-block d-xxl-block">{{ auth()->user()->name }}</h5>
                    </div>
                    <div class="dropdown text-end">
                        @if(auth()->user()->picture != null)
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/web-material/profile-pic/' . auth()->user()->picture) }}" alt="pic" width="32" height="32" class="rounded-circle">
                        </a>
                        @else
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/web-material/logo.png') }}" alt="pic" width="32" height="32" class="rounded-circle">
                        </a>
                        @endif
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="/" target="_blank">Homepage</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
        </header>
        <!-- END HEADER -->
        <!-- CONTENT HERE -->

        @yield('sidebar')

    </section>



    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>

    <!-- trix script -->
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>