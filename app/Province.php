<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\ModelFilters\ProvinceFilter;

class Province extends Model
{
    use Filterable;
    protected $fillable = ['region_id' ,'psgcCode', 'provDesc', 'regCode', 'provCode'];

    public function modelFilter()
    {
        return $this->provideFilter(ProvinceFilter::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function baranggays()
    {
        return $this->hasMany(Baranggay::class);
    }
}
