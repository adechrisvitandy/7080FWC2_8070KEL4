<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    protected $table = 'pelajaran';
    protected $fillable = ['judul','keterangan'];

    public function guru_mengajar()
    {
    	return $this->hasMany(guru_mengajar::class);
    }
}
