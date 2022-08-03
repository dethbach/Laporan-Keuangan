<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Transaction;
use Illuminate\Http\Request;

class KaryawanController extends Controller
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
        $validation = Karyawan::where('name', $request->name)->first();
        if ($validation != null) {
            return back()->with('error', 'Nama telah kerdaftar!');
        } else {
            $store = Karyawan::create([
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
        $whothis = Karyawan::where('id', $request->myid)->first();
        $bonchecker = Transaction::where('type', 'Kasbon')->where('description', $whothis->name)->where('status', false)->first();

        if ($bonchecker != null) {
            return back()->with('error', 'User masih mempunyai Bon. Selesaikan transaksi sebelum menghapus data!');
        } else {
            $destroy = Karyawan::where('id', $request->myid)->first()->delete();
            return back()->with('error', 'Data Deleted!');
        }
    }
}
