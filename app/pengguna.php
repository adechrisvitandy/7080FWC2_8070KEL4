<?php

namespace App;
use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Pengguna as Authenticable;

class Pengguna extends Authenticable
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password','level'];
    
    public function guru()
    {
    	return $this->hasOne(Guru::class);
    }
    public function siswa()
    {
    	return $this->hasOne(Siswa::class);
    }
    public function wali()
    {
    	return $this->hasOne(Wali::class);
    }
}
