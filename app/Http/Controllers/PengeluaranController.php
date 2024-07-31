<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Bank;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.index', compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bank = Bank::all();
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.create', compact('pengeluaran', 'bank'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengeluaran = new Pengeluaran;
        $pengeluaran->saldo_pengeluaran = $request->saldo_pengeluaran;
        $pengeluaran->id_bank = $request->id_bank;
        $pengeluaran->keterangan = $request->keterangan;


        $bank = Bank::findOrFail($pengeluaran->id_bank);
        $bank->total_saldo -= $request->saldo_pengeluaran-0;

        // periksa apakah stok cukup
        if ($pengeluaran->saldo_pengeluaran > $bank->total_saldo) {
            return redirect()->route('pengeluaran.create')->with(['error' => 'Saldo Anda Kurang!'], 400);
        }
    $bank->save();

    $pengeluaran->save();
    return redirect()->route('pengeluaran.create')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pengeluaran $pengeluaran)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.show', compact('pengeluaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::all();
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.edit', compact('pengeluaran', 'bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $bank = $pengeluaran->bank;
        $bank->total_saldo = $bank->total_saldo + $pengeluaran->saldo_pengeluaran - $request->saldo_pengeluaran;
        if ($pengeluaran->saldo_pengeluaran > $bank->total_saldo) {
            return redirect()->route('pengeluaran.edit')->with(['error' => 'Saldo Anda Kurang!'], 400);
        }
        $bank->save();

        $pengeluaran->update($request->all());
        $pengeluaran->save();
        return redirect()->route('pengeluaran.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $bank = $pengeluaran -> bank;
        $bank->total_saldo += $pengeluaran -> saldo_pengeluaran;
        $bank->save();
        $pengeluaran->delete();
        return redirect()->route('pengeluaran.index')->with('success','Data berhasil dihapus');
}
}

