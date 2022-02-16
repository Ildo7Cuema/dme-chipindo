<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\funcionariosExport;
use Maatwebsite\Excel\Facades\Excel;

class funcionariosController extends Controller
{
    public function export()
    {
        return Excel::download(new funcionariosExport, 'funcionarios.xlsx');
    }
}
