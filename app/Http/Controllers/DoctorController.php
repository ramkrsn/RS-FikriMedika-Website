<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //
    public function index(){
        $doctor=$doctors = Doctor::all();
        return view('ManajemenDokter', ['doctors' => $doctors]);
    }

    public function doctor(){
        return view("ManajemenDokterCreate");
    }
    public function createdoctor(Request $request){
        $imagePath = $request->file('wajahdokter')->store('wajahdokter', 'public');
        $doctor=new Doctor;
        $doctor->namadokter=$request->namadokter;
        $doctor->jadwaldokter=$request->jadwaldokter;
        $doctor->polidokter=$request->polidokter;
        $doctor->wajahdokter=$imagePath;
        $doctor->save();
        return redirect(url('/'));
    }

    public function edit_doctor(Request $request) {
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
            $doctor->jadwaldokter = $request->jadwaldokter;
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
    


    public function destroydoctor(Request $request){
        $doctor = Doctor::find($request->iddokter);
        $doctor->delete();
        return redirect(url('/'));
    }
}
