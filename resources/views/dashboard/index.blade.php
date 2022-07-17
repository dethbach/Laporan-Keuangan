@extends('layouts.dashboard')
@section('contents')

<style>
    #card-cash {
        color: #fff;
        background: rgb(30, 63, 145);
        background: linear-gradient(13deg, rgba(30, 63, 145, 1) 0%, rgba(21, 76, 214, 1) 21%, rgba(31, 193, 226, 0.9981034650188201) 77%);
        border-radius: 15px;
    }

    #card-atm {
        color: #fff;
        background: rgb(207, 167, 46);
        background: linear-gradient(13deg, rgba(207, 167, 46, 1) 0%, rgba(213, 171, 21, 1) 39%, rgba(241, 255, 0, 0.9981034650188201) 88%);
        border-radius: 15px;
    }
</style>

<div class="container-fluid text-secondary">

    <div class="d-flex justify-content-start mb-4">
        <div class="card me-3 mb-3" style="width: 18rem;" id="card-cash">
            <div class="card-body">
                <p class="h4 text-start">
                    <i class='bx bx-wallet'></i>
                    <strong> Cash </strong>
                </p>
                <div class="h5 text-end"> Rp. 500.000 </div>
            </div>
        </div>
        <div class="card me-3 mb-3" style="width: 18rem;" id="card-atm">
            <div class="card-body">
                <p class="h4 text-start">
                    <i class='bx bxs-credit-card'></i>
                    <strong> ATM </strong>
                </p>
                <div class="h5 text-end"> Rp. 500.000 </div>
            </div>
        </div>
    </div>

    <div class="card p-4" style="background-color: #191c24;">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link text-light border-secondary bg-dark active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Semua</button>
                <button class="nav-link text-secondary" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Keluar</button>
                <button class="nav-link text-secondary" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Masuk</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
        </div>
    </div>

</div>

@endsection