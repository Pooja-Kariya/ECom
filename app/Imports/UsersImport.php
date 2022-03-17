<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            // 'id' =>$row[0],
            'name' =>$row[1],
            'email' => $row[2],
            // 'password' => $row[3],
            'mobile' => $row[3],
            'address' => $row[4],
            'country_id' => $row[5],
            'state_id' => $row[6],
            'city_id' => $row[7],
            'pincode' => $row[8],
            'role_id' => $row[9],
            'image' => $row[10]
        ]);
    }
}
