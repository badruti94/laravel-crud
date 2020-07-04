@extends('adminlte.master')

@section('content')



<form action="{{ url('/pertanyaan') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input name="judul" type="text" class="form-control" id="judul">
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
        <input type="hidden" name="tanggal_dibuat" value="{{ date('Y-m-d') }}">
        <input type="hidden" name="pertanyaan_votes_id" value="1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection