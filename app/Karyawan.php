<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{

    protected $table = 'karyawan';
    protected $fillable = ['nama', 'jabatan', 'ttl', 'alamat', 'email', 'nohp', 'pendidikan'];

}
