<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['id','name','flag'];
    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
