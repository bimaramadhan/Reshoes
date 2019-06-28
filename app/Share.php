<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
  protected $fillable = [
    'nama',
    'email',
    'no_telepon',
    'alamat',
    'kategori',
    'jumlah'
  ];
}
