<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Exports\YourExport;
use Illuminate\Http\Request;
use App\Models\finalStudents_table;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export(Request $request)
{
    $format = $request->get('format'); // Get the chosen export format from the request
    
    $data = finalStudents_table::all(); // Get the data from your table
    
    if ($format == 'excel') {
        return Excel::download(new YourExport($data), 'filename.xlsx'); // Export the data as Excel
    } else if ($format == 'pdf') {
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdfexport', compact('data'));
      
        return $pdf->download('filename.pdf'); // Download the PDF
    }
}
}
