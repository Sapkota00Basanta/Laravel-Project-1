<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PDFgenerator extends Controller
{
    public function PDFgenerator()
    {
        $pdf=App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Hello!!</h1>');
        return $pdf->stream();
    }
}
