<?php

namespace App\Http\Controllers;

use App\Models\Mapres;
use Illuminate\Http\Request;

class MapresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapres = Mapres::all();
        return view('mapres.index', compact('mapres'));
    }


    public function create()
    {
        return view('form.pendataan_mapres');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jenis_lomba' => 'required|string|max:255',
            'tingkat_lomba' => 'required|string|max:255',
        ]);

        Mapres::create([
            'nama' => $request->nama,
            'universitas' => $request->universitas,
            'fakultas' => $request->fakultas,
            'jenis_lomba' => $request->jenis_lomba,
            'tingkat_lomba' => $request->tingkat_lomba,
        ]);

        return redirect('/mapres')->with('success', 'Selamat anda berhasil mendaftarkan prestasi anda');
    }
}
