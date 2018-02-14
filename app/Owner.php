<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['firstname', 'middlename', 'surname', 'phone', 'email', 'status'];
}