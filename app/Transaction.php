<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'po_code', 'company', 'supplier', 
        'ref_no', 'term', 'delivery_date', 'valid_until',
        'ship_to', 'location', 'net_amount',  'vat_amount',
        'total_amount'
    ];

    public function getTransactionCodeAttribute()
    {
        return str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
