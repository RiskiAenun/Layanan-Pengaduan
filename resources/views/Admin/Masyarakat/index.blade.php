@extends('layouts.sbdadmin')

@section('title', 'Halaman Masyarakat')

@section('header', 'Data Masyarakat')

@section('content')
 <!-- DataTales Example -->
 <div class="container-fluid">
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                 <th>Telepon</th>
                <th>Detail</th>
               
                
            </tr>
            </thead>
        <tbody>
            @foreach ($masyarakat as $k => $v)
            <tr>
                <td>{{ $k += 1 }}</td>
                <td>{{ $v->nik }}</td>
                <td>{{ $v->nama }}</td>
                <td>{{ $v->username }}</td>
                <td>{{ $v->telp }}</td>
                <td><a href="{{ route('masyarakat.show', $v->nik) }}" style="text-decoration:underline">Lihat</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')

    <script>
        $(document).ready(function () {
            $('#masyarakatTable').DataTable();
    });
    </script>
@endsection