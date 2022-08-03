@extends('layouts.dashboard')
@section('sidebar')
<?php $navtitle = "Setting" ?>

<header class="bg-light pb-0 shadow-sm sticky-top mb-4 wrap-breadcrumb" style="z-index: 9!important;">
    <nav class="navbar navbar-expand-md navbar-light" aria-label="Fourth navbar example">
        <div class="container-fluid">
            <div class="navbar-brand">
                Setting
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
                        @if($partof == "Karyawan")
                        <a class="nav-link active fw-bold" aria-current="page" href="/{{ auth()->user()->role }}/setting">Karyawan</a>
                        @else
                        <a class="nav-link" href="/{{ auth()->user()->role }}/setting">Karyawan</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if($partof == "Instansi")
                        <a class="nav-link active fw-bold" aria-current="page" href="/{{ auth()->user()->role }}/instansi">Instansi</a>
                        @else
                        <a class="nav-link" href="/{{ auth()->user()->role }}/instansi">Instansi</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('settings')

@endsection