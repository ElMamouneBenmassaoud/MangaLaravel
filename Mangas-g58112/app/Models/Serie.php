<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Serie
{
    public static function getSeries()
    {
        $pdo = DB::getPdo();
        $series = DB::select("SELECT * FROM series;");
        return $series;
    }

    public static function insert($titre, $auteur, $nombre_volumes, $date_premiere_parution, $couverture, $serie_finie)
    {
        $pdo = DB::getPdo();
        DB::insert(
            "INSERT INTO series (titre, auteur, nombre_volumes,date_premiere_parution,couverture,serie_finie) VALUES (?, ?,?,?,?,?)",
            [$titre, $auteur, $nombre_volumes, $date_premiere_parution, $couverture, $serie_finie]
        );
    }
}

