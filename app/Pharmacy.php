<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = ['registration_number', 'name', 'pharmacist', 
                'address', 'location', 'ward', 'district', 'region', 'date_registered'];

    
}
