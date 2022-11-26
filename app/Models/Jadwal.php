<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = ['id_mapel', 'nomor_soal', 'tanggal', 'jam_mulai', 'jam_selesai'];

    public function mapel()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel'); 
    }

    public function jadwal()
    {
        return $this->hasMany(Hasil::class, 'id_jadwal');
    }
}
