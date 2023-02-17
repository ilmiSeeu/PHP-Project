<?php

namespace App\Exports;

use App\Models\YourModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class YourExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function collection()
    {
        return $this->data;
    }
    
    public function headings(): array
    {
        return ['ID', 'Name', 'Surname', 'Facility', 'Status'];
    }
}
