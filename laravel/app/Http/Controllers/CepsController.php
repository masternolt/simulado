<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;

class CepsController extends Controller
{
    public function home()
    {
        return view('ceps.home');
    }

    public function buscaCeps($Requests)
    {

    }
}
