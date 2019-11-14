<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable  = ['item_id', 'qty'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    
}
