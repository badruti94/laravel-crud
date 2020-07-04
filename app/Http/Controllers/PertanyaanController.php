<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
class PertanyaanController extends Controller
{
    public function index()
    {
        $items = PertanyaanModel::get_all();

        return view('pertanyaan.index', compact('items'));
    }
    public function create()
    {
        return view('pertanyaan.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $item = PertanyaanModel::insert($data);

        if($item){
            return redirect('pertanyaan');
        }
    }

    public function show($id)
    {
        $item = PertanyaanModel::get_by_id($id);
        return view('pertanyaan.show', compact('item'));
    }

    public function edit($id)
    {
        $item = PertanyaanModel::get_by_id($id);
        return view('pertanyaan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = PertanyaanModel::update($request->all(), $id);
        return redirect('pertanyaan');
    }

    public function destroy($id)
    {
        $item = PertanyaanModel::delete($id);
        return redirect('pertanyaan');
    }

    
}
