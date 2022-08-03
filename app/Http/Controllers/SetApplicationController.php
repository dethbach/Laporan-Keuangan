<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Saldo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SetApplicationController extends Controller
{
    public function setapplication()
    {
        $admincheck = User::where('role', 'admin')->first();
        if ($admincheck == null) {
            $createUser = User::create([
                'name' => 'SuperAdmin',
                'username' => 'SuperAdmin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('qw123456')
            ]);
        }

        $cashcheck = Saldo::where('wallet', 'Cash')->first();
        if ($cashcheck == null) {
            $cash = Saldo::create([
                'user_id' => $createUser->id,
                'wallet' => 'Cash',
                'nominal' => '0',
            ]);
        }

        $atmcheck = Saldo::where('wallet', 'ATM')->first();
        if ($atmcheck == null) {
            $atm = Saldo::create([
                'user_id' => $createUser->id,
                'wallet' => 'ATM',
                'nominal' => '0',
            ]);
        }

        return redirect()->route('login')->with('success', 'Ready to go!');
    }
}
