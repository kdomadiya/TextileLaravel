<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class AccountsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $modelClass;

    public function __construct($modelClass)
    {
        $this->modelClass = $modelClass;
    }

    public function headings(): array
    {
        $modelInstance = new $this->modelClass;
        return $modelInstance->getFillable();
    }

    public function collection()
    {
        $modelData = $this->modelClass::all();
        // Convert the model data to an array
        $dataArray = $modelData->toArray();
        // Add the model data to the collection
        $collection = collect([$this->headings()])->merge($dataArray);
        return $collection;
    }
}