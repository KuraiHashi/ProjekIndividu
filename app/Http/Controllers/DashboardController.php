<?php

namespace App\Http\Controllers;

use App\Models\Mapres;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'universitas' => 'required',
            'fakultas' => 'required',
            'jenis_lomba' => 'required',
            'tingkat_lomba' => 'required',
        ]);

        Mapres::where('id', $id)->update([
            'nama' => $request->nama,
            'universitas' => $request->universitas,
            'fakultas' => $request->fakultas,
            'jenis_lomba' => $request->jenis_lomba,
            'tingkat_lomba' => $request->tingkat_lomba,
        ]);

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        Mapres::destroy($id);
        return back()->with('success', 'Data berhasil dihapus.');
    }
}
