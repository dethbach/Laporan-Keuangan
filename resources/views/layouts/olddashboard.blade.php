<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('storage/css/darkmode.css')}}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <title>Service Center @yield('title')</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name ms-2">Service Center</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/{{ Auth()->user()->role }}/dashboard">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>

        </ul>
    </div>
    <section class="home-section">
        <!-- header -->
        <header class="p-3 mb-3 home-header">
            <div class="container">
                <div class="d-flex flex-wrap align-items-end justify-content-end justify-content-lg-end">
                    @if(Auth()->user()->theme == true)

                    <a class="btn btn-outline-warning pb-0 pt-1 me-3 rounded-pill" href="#" role="button" style="border-radius: 50%;">
                        <i class='bx bxs-moon bx-flashing-hover'></i>
                    </a>
                    @else
                    <a class="btn btn-warning pb-0 pt-1 me-3 rounded-pill" href="#" role="button" style="border-radius: 50%;">
                        <i class='bx bx-sun bx-tada-hover'></i>
                    </a>
                    @endif


                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <!-- end header -->

        @yield('contents')


    </section>

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
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the icons class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the icons class
            }
        }
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>