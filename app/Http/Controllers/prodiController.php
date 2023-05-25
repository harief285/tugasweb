<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index(){
        $prodi=['RPL','TI'];
        $title="websaya.com";
        $slug="prodi";
        $konten="Ini adalah konten websyaa.com";
        return view('konten.prodi', compact('title', 'slug', 'prodi'));
    }
}
