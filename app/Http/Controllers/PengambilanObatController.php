<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models;

class PengambilanObatController extends Controller
{
    public function pengambilan_obat()
    {
        $obat = Obat::orderBy('created_at')->get();
        return view('pengambilanobat.pengambilan-obat', [
            'obats' => $obat
        ]);
    }
}
