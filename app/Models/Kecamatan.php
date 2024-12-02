<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = ['nama_kecamatan', 'kabupaten_id'];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function alamat()
    {
        return $this->hasMany(Alamat::class);
    }
}

