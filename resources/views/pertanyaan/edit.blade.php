@extends('adminlte.master')

@section('content')



<form action="{{ url('/pertanyaan/' . $item->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input name="judul" type="text" class="form-control" id="judul" value="{{ $item->judul }}">
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control">{{ $item->isi }}</textarea>
        <label for="jawaban_tepat_id">Jawaban Tepat Id</label>
        <input name="jawaban_tepat_id" type="text" class="form-control" id="jawaban_tepat_id" value="{{ $item->jawaban_tepat_id }}">

        <input type="hidden" name="tanggal_dibuat" value="{{ $item->tanggal_dibuat }}">
        <input type="hidden" name="pertanyaan_votes_id" value="{{ $item->pertanyaan_votes_id }}">
        <input type="hidden" name="tanggal_diperbaharui" value="{{ date('Y-m-d') }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection