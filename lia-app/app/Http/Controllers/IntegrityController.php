<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrityController extends Controller
{
    public function GDPR()
    {
        return view('/nav/integrity');
    }
}
