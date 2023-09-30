<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriTukarJadwal extends Model
{
    use HasFactory;
    protected $table = 'histori_tukar_jadwal';
    protected $guarded = ['id'];
}