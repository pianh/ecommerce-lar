<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LienheController extends Controller
{
    //Action index
    public function index () {
        return view('lien-he');
    }
}
