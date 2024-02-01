<?php

namespace App\Imports;

// use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
// use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Product;
class ImportFile implements ToModel, WithStartRow
{
    protected $model;
    protected $columnMappings;

    /**
     * Create a new instance.
     *
     * @param  string  $model
     * @param  array   $columnMappings
     */
    public function __construct(string $model, array $columnMappings)
    {
        $this->model = $model;
        $this->columnMappings = $columnMappings;
        
        $this->columnMappings = array_filter($columnMappings, function ($column) {
            return strtolower($column) !== 'id';
        });
    }

    /**
     * Transform the data from the Excel sheet into a model.
     *
     * @param  array  $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Map columns dynamically based on the provided columnMappings array.
        $attributes = [];
        foreach ($this->columnMappings as $index => $columnName) {
            // dd($this->columnMappings,$index);
            $attributes[$columnName] = $row[$index] ?? null;
        }
      
        return (new $this->model($attributes))->fill($attributes);
    }
   
    public function startRow(): int
    {
        return 2;
    }
}
