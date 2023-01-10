<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $primaryKey = 'id_pengaduan';

    protected $fillable =[
        'id_pengaduan',
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'foto',
        'kategori',
        'lokasi',
        'status',

    ];

    protected $dates = ['tgl_pengaduan'];

    public function user()
    {
        return $this->hasOne(Masyarakat::class, 'nik', 'nik');
    }
}
