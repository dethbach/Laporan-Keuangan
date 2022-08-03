@extends('layouts.dashboard')
@section('sidebar')
<?php $navtitle = "Setting" ?>


<div class="container-fluid">
    <div class="card border-light shadow mt-3">


        <div class="container-fluid mt-3">
            @if ($message = Session::get('success'))
            <div class="row mt-2 me-3 ms-3">
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="row mt-2 me-3 ms-3">
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            </div>
            @endif
            <div class="d-flex justify-content-start">
                <h3 class="fw-bold">
                    Data Karyawan
                </h3>
            </div>
        </div>
        <div class="container-fluid mt-3">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#modalUser">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg> Karyawan
                </button>
            </div>
        </div>

        <div class="container mt-3 mb-5">
            <div class="table-responsive">
                <table class="table table-sm table-hover" id="tableUser">
                    <thead>
                        <tr>
                            <th class="px-0">#</th>
                            <th class="px-0">Nama</th>
                            <th class="px-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach($karyawans as $karyawan)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $karyawan->name }}</td>
                            <td>

                                <button type="button" class="btn btn-outline-danger border-light btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#modalDestroy" data-bs-theid="{{ $karyawan->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


<!-- Modal Kasbon Keluar-->
<div class="modal fade" id="modalUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/karyawan/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4 text-center">
                    <div class="d-flex justify-content-between me-3 mt-3">
                        <h4 class="text-start display-6">Karyawan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb-3 mt-4">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
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
<div class="modal fade" id="modalDestroy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDestroyLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 shadow">
            <form action="/karyawan/destroy" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4 pb-4 text-center">
                    <div class="alert alert-danger" role="alert">

                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                        </svg>
                        <h2 class="alert-heading mt-4">Are you sure?</h2>
                        <input type="text" class="form-control" id="myid" name="myid" hidden>
                        <hr>
                        <p>Do you really want to delete this record? This process cannot be undone</p>
                    </div>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <button type="submit" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 text-danger border-right"><strong>Yes,</strong> delete</button>
                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 " data-bs-dismiss="modal"><strong>No,</strong> cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable({
            "bPaginate": false,
            "bInfo": false
        });
    });
</script>

<script>
    const modalDestroy = document.getElementById('modalDestroy')
    modalDestroy.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget
        const theidvalue = button.getAttribute('data-bs-theid')
        $("#myid").val(theidvalue);
    })
</script>

@endsection