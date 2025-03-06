<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($articleID){
        return 'Halaman Artikel dengan ID ' .$articleID;
    }
}
