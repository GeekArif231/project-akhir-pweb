<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    protected $table = 'gedung';
    protected $fillable = [
        'nama_gedung', 'deskripsi', 'kapasitas', 'fasilitas', 
        'harga_internal', 'harga_eksternal', 'is_available', 
        'gambar_gedung', 'alamat_id'
    ];

    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }

    public function jadwalSewa()
    {
        return $this->hasMany(JadwalSewa::class, 'gedung_id');
    }
}
