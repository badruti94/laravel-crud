<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JawabanModel extends Model
{
    public static function get_all($id)
    {
        $items = DB::table('jawaban')->where('id',$id)->get();

        return $items;
    }

    public static function insert($data)
    {
        $item = DB::table('jawaban')->insert($data);

        return $item;
    }

}
