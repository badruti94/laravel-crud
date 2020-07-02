<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PertanyaanModel extends Model
{
    public static function get_all()
    {
        $items = DB::table('pertanyaan')->get();

        return $items;
    }

    public static function insert($data)
    {
        $item = DB::table('pertanyaan')->insert($data);

        return $item;
    }
}
