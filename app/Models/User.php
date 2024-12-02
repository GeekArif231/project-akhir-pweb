<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['nama', 'email', 'password', 'nomor_telepon', 'alamat_id'];
    public $incrementing = true;
    protected $keyType = 'int'; 

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function alamat()
    {
        return $this->belongsTo(Alamat::class, 'alamat_id');
    }

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class, 'id_user', 'id_user');
    }
}

