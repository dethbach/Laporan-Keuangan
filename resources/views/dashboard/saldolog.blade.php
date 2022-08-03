@extends('layouts.secondnav')
@section('contents')
<?php $partof = "Transaksi" ?>

<div class="container-fluid">
    <div class="card border-light shadow">
        <div class="container-fluid mt-3">
            <div class="d-flex justify-content-between">
                <h3>
                    Log Saldo
                </h3>
                <a href="/{{auth()->user()->role}}/dashboard">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </a>
            </div>
        </div>
        <div class="container-fluid my-5">
            <div class="table-responsive">
                <table class="table table-hover table-sm" id="tableLog">
                    <thead>
                        <tr>
                            <th class="text-center px-0">#</th>
                            <th class="px-0">Wallet</th>
                            <th>Saldo</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach($saldolog as $log)
                        <tr>
                            <td class="text-center px-0">{{ $i++ }}.</td>
                            <td class="px-0">
                                @if($log->wallet == 'ATM')
                                <span class="badge text-bg-primary">{{ $log->wallet }}</span>
                                @elseif($log->wallet == 'Cash')
                                <span class="badge text-bg-warning">{{ $log->wallet }}</span>
                                @endif
                            </td>
                            <td class="fw-semibold">Rp. {{ $log->nominal }}</td>
                            <td class="fw-semibold">{{ $log->saldouser->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tableLog').DataTable({
            "bInfo": false
        });
    });
</script>
@endsection