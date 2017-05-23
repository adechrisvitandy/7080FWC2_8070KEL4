<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama','nip','alamat','gelar','status','jabatan','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function guru_mengajar()
    {
    	return $this->hasOne(Guru_Mengajar::class);
    }
    public function listGuruDanNip(){
        $out = [];
        foreach ($this->all() as $gru) {
            $out[$gru->id] = "{$gru->nama} ({$gru->nip})";
        }
        return $out;
    }
}
