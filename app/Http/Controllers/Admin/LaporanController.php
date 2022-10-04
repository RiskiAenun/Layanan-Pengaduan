<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
      return view('Admin.Laporan.index');
    }

    public function getLaporan(Request $request)
    {

      $form = $request->form . ' '. '00:00:00';
      $to   = $request->to. ' '. '23:59:59';

      $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$form, $to])->get();

      return view('Admin.Laporan.index', ['pengaduan' => $pengaduan, 'form' => $form, 'to' => $to]);
    }

    public function cetakLaporan($form, $to)
    {

      $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$form, $to])->get();

      $pdf = PDF::loadView('Admin.Laporan.cetak', ['pengaduan' => $pengaduan]);
      return $pdf->download('laporan-pengaduan.pdf');
    }
}
