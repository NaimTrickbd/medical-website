<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class payments extends Controller
{
    //

    public function payments()
    {
        # code...


        return view('admin.dashboard.payments');
    }
}
