<?php

namespace App\Http\Controllers;
use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Account;
use App\Models\Order;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AccountsExport;
use Illuminate\Support\Facades\Storage;
use PDF; 

class ExportController extends Controller
{
   public function export(Request $request){
       $modelClass = $request->model;
       if($request->export == 'xlsx'){
           $excel = Excel::download(new AccountsExport($modelClass),'students.xlsx');
        return $excel;
        }elseif($request->export == 'csv'){
        $result = $this->exportCsv($modelClass);
        return $result;
       }elseif($request->export == 'pdf'){
        $result = $this->generatePdf($modelClass);
        return $result;
       }else{}
   }
   public function exportCsv($modelClass)
   {
        $modelData = $modelClass::all();
        // Convert the model data to an array
        $data = $modelData->toArray();
       // Fetch data from the database
       // CSV file name
       $filename = 'exported_data.csv';

       // Create a temporary file
       $tempFile = tempnam(sys_get_temp_dir(), 'csv_');

       // Open the temporary file for writing
       $fileHandle = fopen($tempFile, 'w');

       // Write headers to the file
       fputcsv($fileHandle, array_keys((array) $data[0]));

       // Write data to the file
       foreach ($data as $row) {
           fputcsv($fileHandle, (array) $row);
       }

       // Close the file handle
       fclose($fileHandle);

       // Move the temporary file to storage
       Storage::put($filename, file_get_contents($tempFile));

       // Remove the temporary file
       unlink($tempFile);

       // Download the file
       $file = storage_path("app/{$filename}");
       return response()->download($file, $filename, [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="' . $filename . '"',
    ]);
   }
   public function generatePdf($modelClass){
    // Fetch data from the database based on the model
     $modelData = $modelClass::all();
        $data = $modelData->toArray();
        $modelInstance = new $modelClass;
        $collect = $modelInstance->getFillable();
       
    // Load the view with data
    $pdf = PDF::loadView('pdf.export', ['data' => $data,'collect' => $collect]);
    // Return the PDF as a download
    return $pdf->download('exported_data.pdf');
}
}
