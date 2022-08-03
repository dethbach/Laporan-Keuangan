<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionOutController extends Controller
{
    public function servicestore(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $random = Str::random(20);
        $storedata = Transaction::create([
            'user_id' => auth()->user()->id,
            'slug' => $random,
            'flow' => $request->flow,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'date' => $date,
            'wallet' => $request->wallet,
            'noservice' => $request->noservice,
            'nonota' => $request->nonota,
            'status' => false,
        ]);

        if ($storedata) {
            if ($request->wallet == 'Cash') {
                $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
                $cash = $saldoCash->nominal - $request->price;
                $storecash = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'Cash',
                    'nominal' => $cash
                ]);
            } elseif ($request->wallet == 'ATM') {
                $saldoATM = Saldo::where('wallet', 'ATM')->latest()->first();
                $atm = $saldoATM->nominal - $request->price;
                $storeATM = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'ATM',
                    'nominal' => $atm
                ]);
            }
            return back()->with('success', 'Transaction Success!');
        }
    }

    public function operasionalstore(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $random = Str::random(20);
        $store = Transaction::create([
            'user_id' => auth()->user()->id,
            'slug' => $random,
            'flow' => $request->flow,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'date' => $date,
            'wallet' => $request->wallet,
            'status' => true,
        ]);

        if ($store) {
            if ($request->wallet == 'Cash') {
                $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
                $cash = $saldoCash->nominal - $request->price;
                $storecash = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'Cash',
                    'nominal' => $cash
                ]);
            } elseif ($request->wallet == 'ATM') {
                $saldoATM = Saldo::where('wallet', 'ATM')->latest()->first();
                $atm = $saldoATM->nominal - $request->price;
                $storeATM = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'ATM',
                    'nominal' => $atm
                ]);
            }
            return back()->with('success', 'Transaction Success!');
        } else {
            return back()->with('error', 'Transaction Failed!');
        }
    }

    public function kasbonstore(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $random = Str::random(20);
        $store = Transaction::create([
            'user_id' => auth()->user()->id,
            'slug' => $random,
            'flow' => $request->flow,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'date' => $date,
            'wallet' => $request->wallet,
            'status' => false,
        ]);
        if ($store) {
            if ($request->wallet == 'Cash') {
                $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
                $cash = $saldoCash->nominal - $request->price;
                $storecash = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'Cash',
                    'nominal' => $cash
                ]);
            } elseif ($request->wallet == 'ATM') {
                $saldoATM = Saldo::where('wallet', 'ATM')->latest()->first();
                $atm = $saldoATM->nominal - $request->price;
                $storeATM = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'ATM',
                    'nominal' => $atm
                ]);
            }
            return back()->with('success', 'Transaction Success!');
        } else {
            return back()->with('error', 'Transaction Failed!');
        }
    }

    public function eventstore(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $random = Str::random(20);
        $store = Transaction::create([
            'user_id' => auth()->user()->id,
            'slug' => $random,
            'flow' => $request->flow,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'receipt' => $request->receipt,
            'date' => $date,
            'wallet' => $request->wallet,
            'status' => false,
        ]);
        if ($store) {
            if ($request->wallet == 'Cash') {
                $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
                $cash = $saldoCash->nominal - $request->price;
                $storecash = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'Cash',
                    'nominal' => $cash
                ]);
            } elseif ($request->wallet == 'ATM') {
                $saldoATM = Saldo::where('wallet', 'ATM')->latest()->first();
                $atm = $saldoATM->nominal - $request->price;
                $storeATM = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'ATM',
                    'nominal' => $atm
                ]);
            }
            return back()->with('success', 'Transaction Success!');
        } else {
            return back()->with('error', 'Transaction Failed!');
        }
    }
}
