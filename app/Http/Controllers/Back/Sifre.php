<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sifre extends Controller
{
    public function password(){
        return view('back.auth.sifremiUnuttum');
    }
}
