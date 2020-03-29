<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contr extends Controller
{
    public function void(Request $requ)
    {
    	print_r($requ->input());
    }
}
