<?php

namespace App\Models;
use \Illuminate\Support\Facades\DB;

class Serie
{
    public static function getSeries()
    {
        $pdo = DB::getPdo();
        $series = DB::select("SELECT * FROM series;");
        return $series;
    }
}
