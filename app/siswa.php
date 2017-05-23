<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama','nis','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }
            public function wali()
    {
        return $this->belongsTo(wali::class);
    }


     public function getUsernameAttribute(){ 
        return $this->pengguna->username;
    }

    public function listSiswaDanNis(){
        $out = [];
        foreach ($this->all() as $sis) {
            $out[$sis->id] = "{$sis->nama} (nis {$sis->nis})";
        }
        return $out;
    }
    
    public function jadwal_pelajaran() 
    {
        return $this->hasMany(jadwal_pelajaran::class,'siswa_id');
    }
    
}
