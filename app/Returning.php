<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returning extends Model
{
    protected $table = 'loanings';
    protected $fillable = ['nama', 'username', 'nim', 'judul_buku', 'nama_penerbit', 'tgl_pinjam', 'tgl_kembali'];
}