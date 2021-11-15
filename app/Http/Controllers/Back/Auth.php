<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function loginOgr(){
        return view('back.auth.girisOgr');
    }
    public function loginAkm(){
        return view('back.auth.girisAkademisyen');
    }
}
