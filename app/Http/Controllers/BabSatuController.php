<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Artikel;

class BabSatuController extends Controller
{
    //Soal1
    //Tampilkan artikel dengan id =17 dan users_id=160
    public function a1(){
        $artikels=Artikel::where('id',1)->where('users_id',1)->get();

        return $artikels;
    }

    //Soal2
    //Tampilkan artikel dengan id =2 atau id=5
    public function a2(){
    }
}
