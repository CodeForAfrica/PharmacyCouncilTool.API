<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    protected $fillable = ['firstname', 'middlename', 'surname', 'level', 'phone', 'email'];

    public function premises()
    {
        return $this->hasMany('App\Premise');
    }
}
