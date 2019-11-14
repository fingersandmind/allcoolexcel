<?php

namespace App\Imports;

use App\AirconList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AirconListImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!$row[0] == null)
        {
            if(!AirconList::where('model',$row[2])->exists())
            {
                return new AirconList([
                    'brand' => (string)$row[0],
                    'type' => (string)$row[1],
                    'model' => (string)$row[2],
                    'description' => (string)$row[3],
                    'cap' => (string)$row[4],
                    'srp' => floatval(str_replace(',','',$row[5])),
                    'cost' => floatval(str_replace(',','',$row[6])),
                ]);
            }
        }
    }
    public function startRow(): int
    {
        return 2;
    }    

}
