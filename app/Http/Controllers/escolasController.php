<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\escolasExport;
use Maatwebsite\Excel\Facades\Excel;

class escolasController extends Controller
{
    public function export(){
        return Excel::download(new escolasExport, 'escolas.xlsx');
    }
}
