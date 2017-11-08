<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispenser extends Model
{
    protected $fillable = ['pin', 'firstname', 'middlename', 'surname', 'registration_date', 'birth_date', 
            'sex', 'phone', 'email', 'postal_address', 'nationality', 'certificate_no', 'training_place'];
}
