<?php

namespace App\Http\Controllers;

use App\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $items = PertanyaanModel::get_all();

        return view('pertanyaan.index', compact('items'));
    }
    public function create()
    {
        return view('pertanyaan.form');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $item = PertanyaanModel::insert($data);

        if($item){
            return redirect('pertanyaan');
        }
    }
}
