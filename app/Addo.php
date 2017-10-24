<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addo extends Model
{
    protected $fillable = ['name', 'accreditation_no', 'region', 'district', 'ward', 'street', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
}