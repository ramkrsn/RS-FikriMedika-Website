<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::all();
        return view('ManajemenDokter', ['doctors' => $doctors]);
    }

    public function doctor()
    {
        return view("ManajemenDokterCreate");
    }

    public function createdoctor(Request $request)
    {
        $imagePath = $request->file('wajahdokter')->store('wajahdokter', 'public');
        $doctor = new Doctor;
        $doctor->namadokter = $request->namadokter;
        $doctor->seninstart = $request->seninstart;
        $doctor->seninend = $request->seninend;
        $doctor->selasastart = $request->selasastart;
        $doctor->selasaend = $request->selasaend;
        $doctor->rabustart = $request->rabustart;
        $doctor->rabuend = $request->rabuend;
        $doctor->kamisstart = $request->kamisstart;
        $doctor->kamisend = $request->kamisend;
        $doctor->jumatstart = $request->jumatstart;
        $doctor->jumatend = $request->jumatend;
        $doctor->sabtustart = $request->sabtustart;
        $doctor->sabtuend = $request->sabtuend;
        $doctor->polidokter = $request->polidokter;
        $doctor->wajahdokter = $imagePath;
        $doctor->save();
        return redirect(url('/'));
    }

    public function edit_doctor(Request $request)
    {
        $doctor = Doctor::find($request->iddokter);
        return view('ManajemenDokterEdit', [
            'dokter' => $doctor
        ]);
    }

    public function updatedoctor(Request $request)
    {
        try {
            $doctor = Doctor::find($request->iddokter);
            $doctor->namadokter = $request->namadokter;
            $doctor->seninstart = $request->seninstart;
            $doctor->seninend = $request->seninend;
            $doctor->selasastart = $request->selasastart;
            $doctor->selasaend = $request->selasaend;
            $doctor->rabustart = $request->rabustart;
            $doctor->rabuend = $request->rabuend;
            $doctor->kamisstart = $request->kamisstart;
            $doctor->kamisend = $request->kamisend;
            $doctor->jumatstart = $request->jumatstart;
            $doctor->jumatend = $request->jumatend;
            $doctor->sabtustart = $request->sabtustart;
            $doctor->sabtuend = $request->sabtuend;
            $doctor->polidokter = $request->polidokter;

            if ($request->hasFile('wajahdokter')) {
                $imagePath = $request->file('wajahdokter')->store('wajahdokter', 'public');
                $doctor->wajahdokter = $imagePath;
            }

            $doctor->save();

            return redirect(url('/'));
        } catch (ValidationException $error) {
            return back();
        }
    }

    public function destroydoctor(Request $request)
    {
        $doctor = Doctor::find($request->iddokter);
        $doctor->delete();
        return redirect(url('/'));
    }
}
