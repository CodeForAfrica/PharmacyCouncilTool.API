<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
    protected $fillable = ['fin', 'registration_date', 'name', 'category', 'category_code', 'country', 
            'region', 'region_code', 'district', 'district_code', 'ward', 'ward_code', 'village', 'village_code',
            'physical', 'owner_id', 'postal_address', 'fax', 'pharmacist_id',
            'pharmaceutical_personnel_id', 'submitted_dispenser_contract', 'permit_profit_amount',
            'receipt_no', 'payment_date', 'remarks', 'data_entry_code', 'premise_fees_due', 'retention_due',
            'renewal_status', 'black_book_list', 'extra_payment'];
    
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public function pharmacist()
    {
        return $this->belongsTo('App\Pharmacist');
    }
}