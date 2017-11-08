<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addo extends Model
{
    protected $fillable = ['name', 'accreditation_no', 'region_id', 'district_id', 'ward_id', 'street', 'owner_id'];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function ward()
    {
        return $this->belongsTo('App\Ward');
    }

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
}