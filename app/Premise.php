<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
    protected $fillable = ['fin', 'registration_date', 'name', 'category', 'category_code', 'country', 
            'region', 'region_code', 'district', 'district_code', 'ward', 'ward_code', 'village', 'village_code',
            'physical', 'owner_name', 'owner_phone', 'owner_email', 'postal_address', 'fax', 'pharmacist',
            'pharmacist_phone','pharmaceutical_personnel', 'submitted_dispenser_contract', 'permit_profit_amount',
            'receipt_no', 'payment_date', 'remarks', 'data_entry_code', 'premise_fees_due', 'retention_due',
            'renewal_status', 'owner_status', 'black_book_list', 'extra_payment'];
}
