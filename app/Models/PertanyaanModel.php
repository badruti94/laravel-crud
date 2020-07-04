<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $items = DB::table('pertanyaan')->get();

        return $items;
    }

    public static function insert($data)
    {
        unset($data['_token']);
        $item = DB::table('pertanyaan')->insert($data);

        return $item;
    }

    public static function get_by_id($id)
    {
        $item = DB::table('pertanyaan')->where('id', $id)->first();

        return $item;
    }


    public static function update($data, $id)
    {
        $item = DB::table('pertanyaan')->where('id', $id)
        ->update([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'tanggal_dibuat' => $data['tanggal_dibuat'],
            'tanggal_diperbaharui' => $data['tanggal_diperbaharui'],
            'jawaban_tepat_id' => $data['jawaban_tepat_id'],
            'pertanyaan_votes_id' => $data['pertanyaan_votes_id']
        ]);

        return $item;
    }

    public static function delete($id)
    {
        $item = DB::table('pertanyaan')->where('id', $id)->delete();
        return $item;
    }
}
