<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class Personnages
{
    public static function getPersonnages()
    {
        $pdo = DB::getPdo();
        $personnages = DB::select("SELECT * FROM personnages;");
        return $personnages;
    }

    public static function getPersonnage($serie_id)
    {
        $pdo = DB::getPdo();
        $personnages = DB::select("SELECT * FROM personnages p JOIN series s on p.serie_id = $serie_id");
        return $personnages;
    }
}
