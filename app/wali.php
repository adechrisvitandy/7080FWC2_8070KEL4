<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
   protected $table = 'wali';
    protected $fillable = ['nama','noHP','alamat','pengguna_id','jadwal_pelajaran_id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }
    public function jadwal_pelajaran()
    {
        return $this->hasMany(jadwal_pelajaran::class);
    }

     public function getUsernameAttribute(){ 
        return $this->pengguna->username;
    }
    
}
