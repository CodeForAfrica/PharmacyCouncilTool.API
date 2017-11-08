<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable = ['type', 'keycode', 'firstname', 'middlename', 'surname', 'phone', 'email'];
}
