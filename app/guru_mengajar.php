<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru_mengajar extends Model
{
    protected $table = 'guru_mengajar';
    protected $fillable = ['guru_id','pelajaran_id'];

    public function guru()
    {
        return $this->belongsTo(guru::class);
    }
    public function pelajaran()
    {
        return $this->belongsTo(pelajaran::class);
    }
       public function jadwal_pelajaran()
       {
        return $this->hasMany(jadwal_pelajaran::class);
       }
       public function listGuru(){
      $out =[];
      foreach ($this->all() as $gurumengajar){
        $out[$gurumengajar->id] = "{$gurumengajar->guru->nama} (pelajaran {$gurumengajar->pelajaran->judul})";
      }
      return $out;
    }
}
