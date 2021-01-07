<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $footer = view('pdf.footer')->render();
        $header = view('pdf.header')->render();

        $options = [
            'footer-html' => $footer,
            'header-html' => $header,
        ];

        view()->share('orders', $data);

        $pdf = PDF::loadView('pdf.resume', $data);
        $pdf->setOptions($options);

        //return view('pdf.resume')->layout('layouts.pdf');
        return $pdf->download('itsolutionstuff.pdf');

    }
}
