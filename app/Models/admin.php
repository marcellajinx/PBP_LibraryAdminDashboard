<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
  // use HasFactory;
  public $timestamps = false;
  protected $table = 'admin';
  protected $primaryKey = 'id_admin';
  protected $keyType = 'string';
  // protected $fillable = ['id', 'judul', 'penulis', 'penerbit', 'thn_terbit', 'deskripsi', 'kategori'];
}
