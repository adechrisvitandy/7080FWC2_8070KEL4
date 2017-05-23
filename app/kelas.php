<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['title'];

      public function jadwal_pelajaran()
    {
        return $this->hasMany(jadwal_pelajaran::class);
    }
}
