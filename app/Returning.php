<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returning extends Model
{
    protected $table = 'returnings';
    protected $fillable = ['nama', 'nim', 'judul_buku', 'nama_penerbit'];
}
