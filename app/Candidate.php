<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'creator_id',
        'name',
        'education',
        'birthday',
        'experience',
        'last_position',
        'applied',
        'top_skill',
        'email',
        'phone',
        'resume'
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'creator_id','id');
    }

}
