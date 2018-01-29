<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
    protected $fillable = ['fin', 'registration_date', 'name', 'category', 'category_code', 'country', 
            'region_id', 'district_id', 'ward_id', 'village', 'village_code',
            'physical', 'owners_ids', 'postal_address', 'fax', 'pharmacist_id',
            'pharmaceutical_personnel_id', 'submitted_dispenser_contract', 'permit_profit_amount',
            'receipt_no', 'payment_date', 'remarks', 'data_entry_code', 'premise_fees_due', 'retention_due',
            'renewal_status', 'black_book_list', 'extra_payment'];

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

    public function pharmacist()
    {
        return $this->belongsTo('App\Personnel');
    }
}