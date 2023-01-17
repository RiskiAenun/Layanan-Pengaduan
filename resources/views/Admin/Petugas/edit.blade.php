@extends('layouts.sbdadmin')

@section('title', 'Form Edit')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header"> 
                Form Edit Petugas
            </div>
            <div class="card-body">
                <form action = "{{ route('petugas.update', $petugas->id_petugas) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas" id="nama_petugas" class="form-control form-control-user" required>
            </div>    
               
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" value="{{ $petugas->username }}" name="username" id="username" class="form-control form-control-user" required>
            </div>  
           
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="{{ $petugas->password }}" name="password" id="password" class="form-control form-control-user" required>
            </div>    
            
                    <div class="form-group">
                        <label for="tlp">No Telepon</label>
                        <input type="number" value="{{ $petugas->tlp }}" name="tlp" id="tlp" class="form-control form-control-user" required>
            </div>    
            
                    <div class="form-group">
                        <label for="level">Level</label>
                        <div class="input-group mt-3">
                            <select name="level" id="level" class="custom-select">
                                @if ($petugas->level == 'admin')
                                
                                <option value="petugas">Petugas</option>
                                @else
                                <option   valaue="admin">Admin</option>
                                <option selected value="petugas">Petugas</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button> 
             </form>  
                <form action = "{{ route('petugas.destroy', $petugas->id_petugas) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2" style="width: 100%">HAPUS</button>
             </form> 
            </div>      
            </div>
        </div>
    </div>
    @endsection