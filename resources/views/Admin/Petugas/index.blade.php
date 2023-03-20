@extends('layouts.sbdadmin')

@section('header', 'Data Petugas')

@section('content')
        
    <div class="container-fluid">
        <div class="card shadow mb-4">
           <div class="card-header py-3">
               
        <a href="{{ route('petugas.create') }}"class="btn btn-success btn-icon-split">
                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                <span class="text">Tambah Data Data Petugas</span>
        </a>
           </div>
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered" id="petugasTable" width="100%" cellspacing="0">
               <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Level</th>
                <th>Detail</th>
            </tr>
        </thead>

        
        <tbody>
            @foreach ($petugas as $k => $v)
            <tr>
                <td>{{ $k += 1 }}</td>
                <td>{{ $v->nama_petugas }}</td>
                <td>{{ $v->username }}</td>
                <td>{{ $v->tlp }}</td>
                <td>{{ $v->level }}</td>
                <td><a href="{{ route('petugas.edit', $v->id_petugas) }}" style="text-decoration:underline">Lihat</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#petugasTable').DataTable();
    });
    </script>
@endsection