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

    public function form(){
        return view('create');
    }

    public function create(){
        $titre =$_POST["titre"];
        $auteur = $_POST["auteur"];
        $nombre_volumes = $_POST["nombre_volumes"];
        $date_premiere_parution =  $_POST["date_parution"];
        $couverture =  $_POST["couverture"];
        $serie_finie =  isset($_POST["serie_finie"]) ? true : false;
    
        Serie::insert($titre, $auteur, $nombre_volumes, $date_premiere_parution, $couverture, $serie_finie);

        return view('create');
    }
}
