<?php

namespace App\Imports;

use App\AirconList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class AirconListImport implements ToModel, WithStartRow, WithCalculatedFormulas
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
                    'srp' => (string)$row[5],
                    'cost' => (string)$row[6],
                ]);
            }
        }
    }
    public function startRow(): int
    {
        return 2;
    }    

}
