<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kullanici extends Controller
{
    public function ogrenci(){
        return view('back.kullaniciOgr');
    }
    public function akademi(){
        return view('back.kullaniciAkdm');
    }
}
