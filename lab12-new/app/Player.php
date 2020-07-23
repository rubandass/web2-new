<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id', 'name','age','role','batting','bowling','image','odiRuns','country_id'];
    public function Country()
    {
        return $this->belongsTo('App\Country');
    }
}
