<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function servicestore(Request $request)
    {
        $checker = Transaction::where('flow', 'Out')->where('noservice', $request->noservice)->first();
        if ($checker != null) {
            $update = Transaction::where('flow', 'Out')->where('noservice', $request->noservice)->first()->update(['status' => true]);
        }

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
            'status' => true,
        ]);

        if ($storedata) {
            if ($request->wallet == 'Cash') {
                $saldoCash = Saldo::where('wallet', 'Cash')->latest()->first();
                $cash = $saldoCash->nominal + $request->price;
                $storecash = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'Cash',
                    'nominal' => $cash
                ]);
            } elseif ($request->wallet == 'ATM') {
                $saldoATM = Saldo::where('wallet', 'ATM')->latest()->first();
                $atm = $saldoATM->nominal + $request->price;
                $storeATM = Saldo::create([
                    'user_id' => auth()->user()->id,
                    'wallet' => 'ATM',
                    'nominal' => $atm
                ]);
            }
            return back()->with('success', 'Transaction Success!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
