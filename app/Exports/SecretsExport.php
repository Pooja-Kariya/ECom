<?php

namespace App\Exports;

use App\Models\Secret;
use Maatwebsite\Excel\Concerns\FromCollection;

class SecretsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Secret::all();
    }
}
