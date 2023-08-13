<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableController extends Controller
{
    //
    public function pertama()
    {
        $nama = 'Bambang';
        $no_punggung = 20;
        $apakahTimnas = true;
       
        echo $nama;
    }
}
