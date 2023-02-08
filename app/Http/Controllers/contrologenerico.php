<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class contrologenerico extends Controller
{
    public function landing (request $request)
    {
    return view (view: 'landing');
    }

 }
