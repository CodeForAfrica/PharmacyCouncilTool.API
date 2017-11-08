<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'capital', 'districts', 'keycode', 'area', 'population', 'postcode', 'zone'];
}
