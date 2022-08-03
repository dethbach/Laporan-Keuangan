<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Saldo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $date = date('d-m-Y');
        $days = new DateTime($date);
        $day = $days->format('l');
        $saldoCash = Saldo::where('wallet', 'Cash')->latest()->pluck('nominal')->first();
        $saldoAtm = Saldo::where('wallet', 'ATM')->latest()->pluck('nominal')->first();
        return view('dashboard.index', compact('date', 'day', 'saldoCash', 'saldoAtm'));
    }
}
