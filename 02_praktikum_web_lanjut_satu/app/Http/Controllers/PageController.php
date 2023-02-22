<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    
    public function about(){
        echo "Nama : Yofandra Arta Priyoga <br>";
        echo "NIM  : 2141720121";
    }
    
    public function articles($id){
        return "Halaman Artikel dengan ID {$id}";
    }
}
