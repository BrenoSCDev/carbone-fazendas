<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunilController extends Controller
{
    public function funil()
    {
        return view('admin.funil.index');
    }
}
