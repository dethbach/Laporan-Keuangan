<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $date = date('d-m-Y');
        $days = new DateTime($date);
        $day = $days->format('l');
        return view('dashboard.index', compact('date', 'day'));
    }
}
