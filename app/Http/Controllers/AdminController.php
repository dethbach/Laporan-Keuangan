<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Saldo;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $date = date('d-m-Y');
        $days = new DateTime($date);
        $day = $days->format('l');
        $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
        $saldoAtm = Saldo::where('wallet', 'ATM')->latest()->first();
        return view('dashboard.index', compact('date', 'day', 'saldoCash', 'saldoAtm'));
    }
    public function setting()
    {
        $karyawans = Karyawan::get();
        return view('dashboard.setting', compact('karyawans'));
    }
}
