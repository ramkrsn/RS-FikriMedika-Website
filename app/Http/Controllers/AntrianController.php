<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index(){
       $queues = Antrian::all()->map(function($queue) {
        $queue->tanggal = Carbon::parse($queue->tanggal)->translatedFormat('d F Y');
        return $queue;
    });
        return view('antrian.index', compact('queues'));
}
}
