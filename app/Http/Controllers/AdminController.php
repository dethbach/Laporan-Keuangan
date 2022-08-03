<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Saldo;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
        $saldoAtm = Saldo::where('wallet', 'ATM')->latest()->first();
        return view('dashboard.index', compact('saldoCash', 'saldoAtm'));
    }
}
