@extends('layouts.sbdadmin')

@section('title', 'Halaman Masyarakat')

@section('header', 'Data Masyarakat')

@section('content')
 <!-- DataTales Example -->
 <div class="container-fluid">
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $k => $v)
            <tr>
                <td>{{ $k += 1 }} </td>
                <td>{{ $v->nik}}</td>
                <td>{{ $v->tgl_pengaduan->format('d-M-Y') }} </td>
                <td>{{ $v->isi_laporan }} </td>
               
               
                <td>
                    @if ($v->status == '0')
                        <a href="#" class="badge badge-danger">Pending</a>
                    @elseif ($v->status == 'proses')
                        <a href="#" class="badge badge-warning text-white">Proses</a>
                    @else 
                        <a href="#" class="badge badge-succsess">Selesai</a>
                    @endif
                </td>
                <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}" style="text-decoration: underline">Lihat</a></td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    </div>
</div>
@endsection
@section('js')

    <script>
        $(document).ready(function () {
            $('#pengaduanTable').DataTable();
         });
    </script>
@endsection