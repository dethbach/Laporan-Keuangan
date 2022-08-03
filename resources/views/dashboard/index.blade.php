@extends('layouts.secondnav')
@section('contents')
<?php $partof = "Transaksi" ?>

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

        <div class="container-fluid mt-3">
            <div class="card" style="width: 15rem;">
                <div class="card-body">
                    <div class="d-row justify-content-start">
                        <h5 class="mb-0">
                            Cash: Rp. {{$saldoCash->nominal}}
                        </h5>
                        <h5 class="mb-3">
                            ATM: Rp. {{$saldoAtm->nominal}}
                        </h5>
                        <p class="text-end mb-0">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalSaldo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                edit
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid mb-5">

            <div class="d-flex justify-content-end mb-4">

                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#modalMasuk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Masuk
                    </button>
                    <button type="button" class="btn btn-outline-danger btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#modalKeluar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                        </svg>
                        Keluar
                    </button>
                </div>

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


<!-- Modal Saldo -->
<div class="modal fade" id="modalSaldo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSaldoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow">
            <form action="/saldo/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 text-center">
                    <h4 class="text-center display-6">Saldo</h4>
                    Cash = Rp. {{$saldoCash->nominal}} <br>
                    ATM = Rp. {{$saldoAtm->nominal}}
                    <div class="mb-3 mt-4">
                        <input type="number" name="cash" class="form-control" id="cash" placeholder="Saldo Cash" value="{{$saldoCash}} " required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="atm" class="form-control" id="atm" placeholder="Saldo ATM" value="{{$saldoAtm}}" required>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex justify-content-end">
                            <a href="/saldo/log">log
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <button type="submit" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Simpan</strong></button>
                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 text-danger" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Masuk Ask Category-->
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalKasbon" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash me-2" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                        </svg>
                        Kasbon
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalEvent" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check me-2" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        Event & Pengadaan
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalOther" class="list-group-item list-group-item-action list-group-item-primary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2 me-2" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                        Lain-lain
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Keluar Ask Category-->
<div class="modal fade" id="modalKeluar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKeluarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-body">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="list-group">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalServiceOut" class="list-group-item list-group-item-action list-group-item-secondary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tools me-2" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                        </svg>
                        Service
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalKasbonOut" class="list-group-item list-group-item-action list-group-item-secondary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash me-2" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                        </svg>
                        Kasbon
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalEventOut" class="list-group-item list-group-item-action list-group-item-secondary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check me-2" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        Event & Pengadaan
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalOperasionalOut" class="list-group-item list-group-item-action list-group-item-secondary py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        Operasional
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Service Masuk-->
<div class="modal fade" id="modalService" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalServiceLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/transaksiMasuk/service/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4 text-center">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Transaksi Masuk</h4>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <select class="form-select" aria-label="Kategori Service" id="type" name="type">
                            <option value="Devisi Hp">Devisi Hp</option>
                            <option value="Devisi Laptop">Devisi Laptop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Pembayaran" id="wallet" name="wallet">
                            <option value="Cash">Cash</option>
                            <option value="ATM">Debit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="nonota" class="form-control" id="nonota" placeholder="Nomor Nota" required>
                        <input type="text" name="flow" class="form-control" id="flow" value="In" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="noservice" class="form-control" id="noservice" placeholder="Nomor Tanda Terima" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control" id="price" placeholder="Harga" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" class="form-control" id="description" placeholder="Deskripsi Service" required>
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

<!-- Modal Service Keluar-->
<div class="modal fade" id="modalServiceOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalServiceOutLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/transaksiKeluar/service/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4 text-center">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Transaksi Keluar</h4>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <select class="form-select" aria-label="Kategori Service" id="type" name="type">
                            <option value="Devisi Hp">Devisi Hp</option>
                            <option value="Devisi Laptop">Devisi Laptop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Pembayaran" id="wallet" name="wallet">
                            <option value="Cash">Cash</option>
                            <option value="ATM">Debit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="noservice" class="form-control" id="noservice" placeholder="Nomor Service">
                        <input type="text" name="flow" class="form-control" id="flow" value="Out" hidden>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" list="datalistOptions" id="nonota" name="nonota" placeholder="Nomor Nota">
                        <datalist id="datalistOptions">
                            <option value="Stock">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control" id="price" placeholder="Harga" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" class="form-control" id="description" placeholder="Deskripsi Service" required>
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

<!-- Modal Operasional Keluar-->
<div class="modal fade" id="modalOperasionalOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalOperasionalOutLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/transaksiKeluar/operasional/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4 text-center">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Operasional Keluar</h4>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <input type="text" name="xtype" class="form-control" id="xtype" placeholder="Operasional" value="Operasional" disabled>
                        <input type="text" name="type" class="form-control" id="type" value="Operasional" hidden>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Pembayaran" id="wallet" name="wallet">
                            <option value="Cash">Cash</option>
                            <option value="ATM">Debit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" class="form-control" id="description" placeholder="Deskripsi Transaksi" required>
                        <input type="text" name="flow" class="form-control" id="flow" value="Out" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control" id="price" placeholder="Harga" required>
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

<!-- Modal Kasbon Keluar-->
<div class="modal fade" id="modalKasbonOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKasbonOutLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/transaksiKeluar/kasbon/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Kasbon</h4>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <input type="text" name="xtype" class="form-control" id="xtype" placeholder="Kasbon" value="Kasbon" disabled>
                        <input type="text" name="type" class="form-control" id="type" value="Kasbon" hidden>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Pembayaran" id="wallet" name="wallet">
                            <option value="Cash">Cash</option>
                            <option value="ATM">Debit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description">Nama</label>
                        <select class="form-select" aria-label="Description" name="description" id="description" placeholder="Deskripsi Transaksi" required>
                            @foreach($karyawans as $karyawan)
                            <option value="{{ $karyawan->name }}">{{$karyawan->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="flow" class="form-control" id="flow" value="Out" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control" id="price" placeholder="Harga" required>
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

<!-- Modal Kasbon Masuk-->
<div class="modal fade" id="modalKasbon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKasbonLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/transaksiMasuk/kasbon/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Kasbon</h4>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <input type="text" name="xtype" class="form-control" id="xtype" placeholder="Kasbon" value="Kasbon" disabled>
                        <input type="text" name="type" class="form-control" id="type" value="Kasbon" hidden>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Pembayaran" id="wallet" name="wallet">
                            <option value="Cash">Cash</option>
                            <option value="ATM">Debit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description">Nama</label>
                        <select class="form-select" aria-label="Description" name="description" id="description" placeholder="Deskripsi Transaksi" required>
                            @foreach($karyawans as $karyawan)
                            <option value="{{ $karyawan->name }}">{{$karyawan->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="flow" class="form-control" id="flow" value="In" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control" id="price" placeholder="Harga" required>
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

<!-- Modal Event Keluar-->
<div class="modal fade" id="modalEventOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEventOutLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/transaksiKeluar/event/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Event & Pengadaan</h4>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <select class="form-select" name="type" aria-label="Pembayaran" id="type" required>
                            <option value="Event">Event</option>
                            <option value="Pengadaan">Pengadaan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Pembayaran" id="wallet" name="wallet" required>
                            <option value="Cash">Cash</option>
                            <option value="ATM">Debit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="receipt" id="receipt" name="receipt" required>
                            @foreach($instansis as $instansi)
                            <option value="{{$instansi->name}}">{{$instansi->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" class="form-control" id="description" placeholder="Deskripsi Transaksi" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control" id="price" placeholder="Harga" required>
                        <input type="text" name="flow" class="form-control" id="flow" value="Out" hidden>
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