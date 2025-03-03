<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '234176004 <br> Audric Andhika';
    }

    public function articles($articleID){
        return 'Halaman Artikel dengan ID ' .$articleID;
    }
}
