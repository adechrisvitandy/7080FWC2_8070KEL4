<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_pelajaran extends Model
{
    protected $table = 'jadwal_pelajaran';
    protected $fillable = ['siswa_id','kelas_id','nilai_id','guru_mengajar_id'];
    
    public function siswa()
    {
        return $this->belongsTo(siswa::class); 
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function guru_mengajar()
    {
        return $this->belongsTo(guru_mengajar::class);
    }

     public function nilai()
    {
        return $this->belongsTo(nilai::class);
    }

     public function listjadwal(){
      $out =[];
      foreach ($this->all() as $jp){
        $out[$jp->id] = "{$jp->siswa->nama} (kelas {$jp->kelas->title})";
      }
      return $out;
    }
    public function listjadwal2(){
      $out =[];
      foreach ($this->all() as $jp){
        $out[$jp->id] = "{$jp->siswa->nama} (kelas {$jp->kelas->title}) (nilai {$jp->nilai->ketnilai})";
      }
      return $out;
    }
}
