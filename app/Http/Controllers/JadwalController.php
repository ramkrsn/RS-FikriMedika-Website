<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\jadwalpertemuan;

class JadwalController extends Controller
{
    public function index()
    {
        // Retrieve doctors from the database
        $doctors = Doctor::all();

        // Pass the $doctors variable to the view
        return view('JadwalPertemuan', ['doctors' => $doctors]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'nik' => 'required|integer',
            'keluhan' => 'required|string',
            'dokter' => 'required|exists:doctors,id', // Ensure the selected doctor exists in the doctors table
            'option' => 'required|string', // You might need to add validation rules for this field based on your requirements
        ]);

        // Create a new instance of the JadwalPertemuan model and fill it with the validated data
        $jadwalPertemuan = new JadwalPertemuan();
        $jadwalPertemuan->namadepan = $validatedData['nama_depan'];
        $jadwalPertemuan->namabelakang = $validatedData['nama_belakang'];
        $jadwalPertemuan->NIK = $validatedData['nik'];
        $jadwalPertemuan->keluhanpasien = $validatedData['keluhan'];
        $jadwalPertemuan->polidokter = $validatedData['dokter'];
        $jadwalPertemuan->opsi = $validatedData['option']; // Assign the value of the 'option' field

        // Save the data to the database
        $jadwalPertemuan->save();

        // Redirect back with a success message or do whatever you want
        return redirect()->back()->with('success', 'Jadwal Pertemuan berhasil disimpan!');
    }
}
