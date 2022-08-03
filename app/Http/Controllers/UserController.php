<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Saldo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instansi;
use App\Models\Karyawan;

class UserController extends Controller
{
    public function index()
    {
        $date = date('d-m-Y');
        $days = new DateTime($date);
        $day = $days->format('l');
        $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
        $saldoAtm = Saldo::where('wallet', 'ATM')->latest()->first();
        $karyawans = Karyawan::get();
        $instansis = Instansi::get();
        return view('dashboard.index', compact('date', 'day', 'saldoCash', 'saldoAtm', 'karyawans', 'instansis'));
    }

    public function setting()
    {
        $karyawans = Karyawan::get();
        return view('dashboard.setting', compact('karyawans'));
    }

    public function instansi()
    {
        $instansis = Instansi::get();
        return view('dashboard.instansi', compact('instansis'));
    }
}
