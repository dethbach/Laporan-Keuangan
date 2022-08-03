<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstansiController extends Controller
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
    public function store(Request $request)
    {
        $validation = Instansi::where('name', $request->name)->first();
        if ($validation != null) {
            return back()->with('error', 'Nama telah kerdaftar!');
        } else {
            $store = Instansi::create([
                'name' => $request->name
            ]);

            if ($store) {
                return back()->with('success', 'register successfully!');
            } else {
                return back()->with('error', 'register failed! refresh browser and try again!');
            }
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
    public function destroy(Request $request)
    {
        $whothis = Instansi::where('id', $request->myid)->first();
        $eventCheck = Transaction::where('type', 'Event')->where('receipt', $whothis->name)->where('status', false)->first();
        $pengadaanCheck = Transaction::where('type', 'Pengadaan')->where('receipt', $whothis->name)->where('status', false)->first();

        if ($eventCheck != null || $pengadaanCheck != null) {
            return back()->with('error', 'User masih mempunyai Tagihan. Selesaikan transaksi sebelum menghapus data!');
        } else {
            $destroy = Instansi::where('id', $request->myid)->first()->delete();
            return back()->with('error', 'Data Deleted!');
        }
    }
}
