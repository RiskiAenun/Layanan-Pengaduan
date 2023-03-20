@extends('layouts.sbdadmin')

@section('title', 'Detail Pengaduan')

@section('content')
    <div  class="row"> 
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Pengaduan Mayarakat
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                                <th>ID</th>
                                <td>:</td>
                                <td>{{ $pengaduan->id_pengaduan }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengaduan</th>
                                <td>:</td>
                                <td>{{ $pengaduan->tgl_pengaduan }}</td>
                            </tr>
                            <tr>
                                <th>Nik</th>
                                <td>:</td>
                                <td>{{ $pengaduan->nik }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengaduan</th>
                                <td>:</td>
                                <td>{{ $pengaduan->tgl_pengaduan }}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>:</td>
                                <td><img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Pengaduan" class="embed-responsive"></td>
                            </tr>
                            <tr>
                                <th>Isi Laporan</th>
                                <td>:</td>
                                <td>{{ $pengaduan->isi_laporan }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>
                                    @if ($pengaduan->status == '0')
                                        <a href="#" class="badge badge-danger">Pending</a>
                                    @elseif ($pengaduan->status == 'proses')
                                        <a href="#" class="badge badge-warning test-white">Proses</a>
                                    @else 
                                        <a href="#" class="badge badge-succsess">Selesai</a>
                                    @endif
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
        <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Tanggapan Petugas
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tanggapan.createOrUpdate') }}" method="POST">
                        @csrf
                         <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                         <div class="form-group">
                            <label for="status">Status</label>
                            <div class="input-group mb-3">
                                <select name="status" id="status" class="custom-select">
                                    @if ($pengaduan->status == '0')
                                    <option value="0">Pending</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>

                                    @elseif($pengaduan->status == 'proses')
                                    <option value="0">Pending</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                    
                                    @else
                                    <option value="0">Pending</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                    @endif
                                </select>
                            </div>
                         </div>
                         <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <textarea name="tanggapan" id="tanggapan" rows="4" class="form-control" placeholder="Belum Adan Tanggapan">{{ $tanggapan->tanggapan ?? ''}}</textarea>
                         </div>
                         <button type="submit" class="btn btn-purple">KIRIM</button>
                    </form>
                    @if (Session::has('status'))
                        <div class="alert alert-success mt-2">
                            {{ Session::get('status')}}

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection