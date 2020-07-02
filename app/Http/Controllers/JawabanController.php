<?php

namespace App\Http\Controllers;

use App\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id)
    {
        $items = JawabanModel::get_all($id);

        return $items;
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['pertanyaan_id'] = $id;
        $item = JawabanModel::insert($data);

        if($item){
            return true;
        }
    }
}
