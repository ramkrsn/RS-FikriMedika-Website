<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class MelihatJadwalController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('Melihat_Jadwal_Dokter', ['doctors' => $doctors]);
    }
}
