<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info_kembali extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'info_kembali';
    protected $primaryKey = 'id_kembali';
    protected $keyType = 'string';
    protected $fillable = ['id_kembali', 'waktu_kembali', 'id', 'pengguna'];
}
