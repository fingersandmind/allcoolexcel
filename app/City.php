<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\ModelFilters\ProvinceFilter;

class City extends Model
{
    use Filterable;
    protected $fillable = ['province_id', 'psgcCode', 'cityDesc', 'provCode', 'cityCode'];

    public function modelFilter()
    {
        return $this->provideFilter(CityFilter::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function baranggays()
    {
        return $this->hasMany(Baranggay::class);
    }
}
