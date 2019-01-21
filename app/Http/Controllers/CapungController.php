<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapungController extends Controller
{
    function index() {
        echo "ini dari controller";    
    }
    function pujangga() {
        return "bebek goreng by pujangga";
    }
    function siti() {
        return view ('mamalia/kucing');
        //bikin file kucing.blade
    }

}
