<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dr extends Controller
{
    public function dr()
    {
        # code...

        return view('admin.dashboard.dr');
    }
}
