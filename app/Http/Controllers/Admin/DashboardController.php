<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all()->count();

        $masyarakat = Masyarakat::all()->count();

        $proses = Pengaduan::where('status', 'proses')->get()->count();
        $selesai = Pengaduan::where('status', 'selesai')->get()->count();

        $petugas = Petugas::all()->count();

        $countBencanaAlam = Pengaduan::where('kategori','ba')->count();
        $countPerjudian = Pengaduan::where('kategori','perjudian')->count();
        $countKegaduhan = Pengaduan::where('kategori','kegaduah')->count();
        $countTindakPidana = Pengaduan::where('kategori','tp')->count();
        $countLainya = Pengaduan::where('kategori','lainnya')->count();

        return view('Dashboard.index', compact('petugas','masyarakat','proses','selesai','petugas','countBencanaAlam','countPerjudian','countKegaduhan','countTindakPidana','countLainya'));
    }
}
