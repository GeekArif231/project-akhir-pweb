<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $table = 'penyewaan';
    protected $fillable = [
        'id_user', 'jadwal_sewa_id', 'detail_acara', 
        'jam_mulai', 'jam_selesai', 'confirmed_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,  'id_user', 'id_user' );
    }

    public function jadwalSewa()
    {
        return $this->belongsTo(JadwalSewa::class, 'jadwal_sewa_id');
    }

    public function riwayat()
    {
        return $this->hasOne(Riwayat::class, 'penyewaan_id');
    }
}
