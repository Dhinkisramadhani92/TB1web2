<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function TampilContoh()
    {
        $data = [
            'totalProducts'=>310,
            'salesToday'=>100,
            'totalRevenue'=> 'Rp.50.000.000',
            'regusteredUser'=>350
        ];
        return view('contoh', $data);
    }
}
