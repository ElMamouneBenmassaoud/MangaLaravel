<?php

namespace App\Http\Controllers;
use App\Models\Serie;

use Illuminate\Http\Request;

class accueilCtrl extends Controller
{
    public function getSeries(){
        $series = Serie::getSeries();
        return view('accueil', ['series' => $series]);
    }
}
