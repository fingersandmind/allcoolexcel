<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getItemCodeAttribute()
    {
        return str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}
