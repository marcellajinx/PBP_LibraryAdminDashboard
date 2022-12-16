<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info_pinjam extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'info_pinjam';
    protected $primaryKey = 'id_pinjam';
    protected $keyType = 'string';
    protected $fillable = ['id_pinjam', 'waktu_pinjam', 'id', 'pengguna'];
}
