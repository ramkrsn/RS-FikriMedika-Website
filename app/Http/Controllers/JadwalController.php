<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\JadwalPertemuan;

class JadwalController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('JadwalPertemuan', ['doctors' => $doctors]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namadepan' => 'required|string|max:255',
            'namabelakang' => 'required|string|max:255',
            'NIK' => 'required|integer',
            'keluhanpasien' => 'required|string',
            'namadokter' => 'required|string', 
            'polidokter' => 'required|string', 
            'opsi' => 'required|string',
        ]);

        JadwalPertemuan::create($validatedData);

        return redirect()->back()->with('success', 'Jadwal Pertemuan berhasil disimpan!');
    }
}
