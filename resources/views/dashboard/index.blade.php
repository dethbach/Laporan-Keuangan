@extends('layouts.dashboard')
@section('contents')

<div class="container-fluid">
    <div class="d-flex justify-content-start mb-4">
        <div class="card border-dark me-3 mb-3" style="width: 18rem;" id="card-cash">
            <div class="card-body">
                <p class="h4 text-start">
                    <i class='bx bx-wallet'></i>
                    <strong> Cash </strong>
                </p>
                <div class="h5 text-end"> Rp. 500.000 </div>
            </div>
        </div>
        <div class="card border-dark me-3 mb-3" style="width: 18rem;" id="card-atm">
            <div class="card-body">
                <p class="h4 text-start">
                    <i class='bx bxs-credit-card'></i>
                    <strong> ATM </strong>
                </p>
                <div class="h5 text-end"> Rp. 500.000 </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-light mb-4 mt-5 ps-4">
    <h3>
        Transaksi
    </h3>
</div>


<div class="container-fluid">

    <div class="card vh-100">

    </div>

    <!-- <div class="d-flex justify-content-center">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active me-5" aria-current="page" href="#">Semua Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Transaksi Keluar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Transaksi Masuk</a>
            </li>
        </ul>
    </div> -->
</div>

</div>

@endsection