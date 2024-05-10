<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalpertemuan extends Model
{
    use HasFactory;

    protected $primaryKey = "idjadwal";
    protected $fillable = ["namadepan", "namabelakang", "NIK", "keluhanpasien", "polidokter", "namadokter", "opsi"];
    protected $guarded = [];

    public $timestamps = true;
}