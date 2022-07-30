<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function aplikasi()
    {
        return $this->belongsToMany(Aplikasi::class, 'role_aplikasis', 'role_id', 'aplikasi_id');
    }
    
    public function pegawai()
    {
        return $this->belongsToMany(Pegawai::class, 'role_pegawais', 'role_id', 'pegawai_id');
    }
    
}
