<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function headings(): array
    {
        return[
            'ID',
            'Name',
            'Email Id',
            'Mobile No',
            'Address',
            'Country',
            'State',
            'City',
            'Pincode',
            'Role ID',
            'Image',
            'Created At',
            'Updated At'
        ];
    }
}
