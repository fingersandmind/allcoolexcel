<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baranggay extends Model
{
    protected $fillable = ['city_id', 'province_id', 'psgcCode', 'brgyDesc', 'provCode', 'cityCode'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
