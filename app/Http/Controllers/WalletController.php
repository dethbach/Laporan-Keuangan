<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saldolog = Saldo::with('saldouser')->latest()->get();
        return view('dashboard.saldolog', compact('saldolog'));
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
    public function store(Request $request)
    {
        $oldCash = Saldo::where('wallet', 'Cash')->latest()->first();
        $oldAtm = Saldo::where('wallet', 'ATM')->latest()->first();
        if ($request->atm != null) {
            $sumatm = $request->atm + $oldAtm->nominal;
            $storeAtm = Saldo::create([
                'wallet' => 'ATM',
                'nominal' => $sumatm,
                'user_id' => auth()->user()->id
            ]);
        }
        if ($request->cash != null) {
            $sumcash = $request->cash + $oldCash->nominal;
            $storeCash = Saldo::create([
                'wallet' => 'Cash',
                'nominal' => $sumcash,
                'user_id' => auth()->user()->id
            ]);
        }
        return back()->with('success', 'Update Successfully');
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
