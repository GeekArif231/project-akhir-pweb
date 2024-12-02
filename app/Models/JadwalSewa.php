<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSewa extends Model
{
    use HasFactory;
    protected $table = 'jadwal_sewa';
    protected $fillable = ['tanggal_mulai', 'tanggal_selesai', 'is_available', 'gedung_id'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class, 'jadwal_sewa_id');
    }
}

