<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $primaryKey="iddokter";
    protected $fillable=["namadokter","jadwaldokter","polidokter","wajahdokter"];
    protected $guarded="iddokter";
}
