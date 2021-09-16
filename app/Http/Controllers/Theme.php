<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class Theme extends Controller
{

    public function contact()
    {
        return view ('contact');
    }
}