<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  // use HasFactory;
  public $timestamps = false;
  protected $table = 'pengguna';
  protected $primaryKey = 'id_pengguna';
  protected $keyType = 'string';
  // protected $fillable = ['id', 'judul', 'penulis', 'penerbit', 'thn_terbit', 'deskripsi', 'kategori'];

  protected $hidden = [
    'password',
    'remember_token',
  ];
}
