<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['id', 'judul', 'penulis', 'penerbit', 'thn_terbit', 'deskripsi', 'kategori'];
}
