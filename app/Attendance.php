<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['type', 'pharmacy_registration_number', 'days'];
}
