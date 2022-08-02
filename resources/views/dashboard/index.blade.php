@extends('layouts.dashboard')
@section('sidebar')
<?php $navtitle = "Dashboard" ?>
<?php $partof = "Transaksi" ?>

<header class="bg-light pb-0 shadow-sm sticky-top mb-4 wrap-breadcrumb" style="z-index: 9!important;">
    <nav class="navbar navbar-expand-md navbar-light" aria-label="Fourth navbar example">
        <div class="container-fluid">
            <div class="navbar-brand">
                Dashboard
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ccc" class="bi bi-dash-lg" viewBox="0 0 16 16" style="transform: rotate(90deg);">
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                </svg>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        @if($partof == "Transaksi")
                        <a class="nav-link active fw-bold" aria-current="page" href="/{{ auth()->user()->role }}/profile/setup">Transaksi</a>
                        @else
                        <a class="nav-link" href="/{{ auth()->user()->role }}/profile/setup">Transaksi</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container-fluid">
    <div class="card border-light shadow">

        <div class="container-fluid mt-3">
            <div class="d-row justify-content-start">
                <h3 class="fw-bold">
                    @if( $day == 'Monday' )
                    Senin,
                    @elseif ( $day == 'Tuesday' )
                    Selasa,
                    @elseif ( $day == 'Wednesday' )
                    Rabu,
                    @elseif ( $day == 'Thursday' )
                    Kamis,
                    @elseif ( $day == 'Friday' )
                    Jumat,
                    @elseif ( $day == 'Saturday' )
                    Sabtu,
                    @elseif ( $day == 'Monday' )
                    Minggu,
                    @endif
                </h3>
                <h4>{{$date}}</h4>
            </div>
        </div>

        <div class="container-fluid mb-5">

            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    Transaksi
                </button>
            </div>

            <div class="table-responsive">
                <table class="table" id="todayTransaction">
                    <thead>
                        <tr>
                            <th class="px-0">#</th>
                            <th class="px-0">Kategori</th>
                            <th>Transaksi</th>
                            <th class="px-0">Harga</th>
                            <th class="px-0">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-0">1.</td>
                            <td class="px-0">Service</td>
                            <td>Lcd Apa</td>
                            <td class="px-0">
                                <div class="d-flex text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill me-2" viewBox="0 0 16 16">
                                        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                    </svg>
                                    Rp. 100.000
                                </div>
                            </td>
                            <td class="px-0">
                                <a href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">2.</td>
                            <td class="px-0">Service</td>
                            <td>Baterai Helicopter Remote Air Force</td>
                            <td class="px-0">
                                <div class="d-flex text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-down-fill me-2" viewBox="0 0 16 16">
                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    Rp. 200.000
                                </div>
                            </td>
                            <td class="px-0">
                                <a href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- MODAL PARKING -->


<!-- Modal Ask Transaction-->
<div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col text-center">
                        <button class="btn btn-primary btn-lg" data-bs-target="#modalMasuk" data-bs-toggle="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart-plus mt-2" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <p class="fw-semibold mt-2">Transaksi Masuk</p>
                        </button>
                    </div>
                    <div class="col text-center">
                        <button class="btn btn-warning btn-lg" data-bs-target="#modalKeluar" data-bs-toggle="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart-dash mt-2" viewBox="0 0 16 16">
                                <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <p class="fw-semibold mt-2">Transaksi Keluar</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ask Category-->
<div class="modal fade" id="modalMasuk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMasukLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-body">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="list-group">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalService" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tools me-2" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                        </svg>
                        Service
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalOperasional" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        Operasional</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalKasbon" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash me-2" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                        </svg>
                        Kasbon</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalEvent" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check me-2" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        Event & Pengadaan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Service -->
<div class="modal fade" id="modalService" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalServiceLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow">
            <form action="/ALB/profile/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 text-center">
                    <h4 class="text-center display-6">Account</h4>
                    <div class="mb-3 mt-4">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" value="" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="nik" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" value="" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="KTA INI" value="" required>
                    </div>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <button type="submit" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Simpan</strong></button>
                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 text-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#todayTransaction').DataTable({
            "bPaginate": false,
            "bInfo": false
        });
    });
</script>

@endsection