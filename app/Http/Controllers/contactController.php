<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contactUs()
    {
        return view('contactus');
    }
}
