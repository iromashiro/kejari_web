<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //
    public function view()
    {
        $var = 'isi';
        return view('welcome', compact('var'));
    }

}
