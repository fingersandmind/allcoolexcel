<?php

namespace App\Traits;

trait MakeOrders
{
    protected $company = 'All Cool Philippines';

    public function company($options = null)
    {
        if(!$options === null)
        {
            return $options;
        }
        return $this->company;
    }
    
}