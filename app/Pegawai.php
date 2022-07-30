<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = [];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_aplikasis', 'pegawai_id', 'role_id');
    }
    
}
