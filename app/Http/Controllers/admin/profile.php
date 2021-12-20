<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profile extends Controller
{
    //

    public function profile()
    {
        # code...

        return view('admin.dashboard.profile');
    }
}
