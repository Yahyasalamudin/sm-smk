<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKaryawan extends Model
{
    use HasFactory;
    protected $table = 'jadwal_karyawan';
    protected $guarded = ['id'];
}
