<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirconList extends Model
{
    protected $fillable = ['brand', 'type', 'model', 'description', 'cap', 'srp', 'cost'];
    
    protected $table = 'aircon_lists';
}
