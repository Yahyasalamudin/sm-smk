<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalGuru extends Model
{
    use HasFactory;
    protected $table = 'jadwal_guru';
    protected $guarded = ['id'];
}
