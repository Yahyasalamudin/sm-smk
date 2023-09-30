<?php

namespace App\Http\Controllers;

use App\Http\Traits\DashboardTrait;
use App\Models\Guru;
use App\Models\JadwalGuru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use DashboardTrait;

    public function index($role)
    {
        switch ($role) {
            case 'admin':
                return view('admin.dashboard', [
                    'user' => User::count(),
                    'guru' => Guru::count(),
                    'gurulk' => Guru::where('jk', 'L')->count(),
                    'gurupr' => Guru::where('jk', 'P')->count(),
                    'siswa' => Siswa::count(),
                    'siswalk' => Siswa::where('jk', 'L')->count(),
                    'siswapr' => Siswa::where('jk', 'P')->count(),
                    'kelas' => Kelas::count(),
                    'mapel' => Mapel::count(),
                    'jadwal_guru' => JadwalGuru::count(),
                ]);
                break;
            case 'guru':
                return view('guru.dashboard', [
                    'jadwal_guru' => JadwalGuru::get()
                ]);
                break;
            default:
                return view('karyawan.dashboard', compact('role'));
        }
    }
}
