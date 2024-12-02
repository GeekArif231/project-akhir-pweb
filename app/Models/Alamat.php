<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table = 'alamat';
    protected $fillable = ['nama_jalan', 'kecamatan_id'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'alamat_id');
    }

    public function gedung()
    {
        return $this->hasMany(Gedung::class, 'alamat_id');
    }
}

