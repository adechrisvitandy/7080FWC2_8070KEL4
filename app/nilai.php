<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['ket_nilai','keterangan'];
    
      public function jadwal_pelajaran()
    {
        return $this->hasOne(jadwal_pelajaran::class);
    }
}
