<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['firstname', 'middlename', 'surname', 'phone', 'email', 'status'];

    public function addos()
    {
        return $this->hasMany('App\Addo');
    }

    public function premises()
    {
        return $this->hasMany('App\Premise');
    }
}