<?php

namespace App\Exports;

use App\Models\Otchet;
use Maatwebsite\Excel\Concerns\FromCollection;



class OtchetExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Otchet::all('ima', 'name', 'price');
    }
}
