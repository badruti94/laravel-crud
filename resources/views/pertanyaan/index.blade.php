@extends('adminlte.master')

@section('content')

<a class="btn btn-primary" href="{{ url('pertanyaan/create') }}">Tambah Data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Tanggal Diperbaharui</th>
            <th scope="col">Id Jawaban Tepat</th>
            <th scope="col">Votes</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->isi }}</td>
            <td>{{ $item->tanggal_dibuat }}</td>
            <td>{{ $item->tanggal_diperbaharui }}</td>
            <td>{{ $item->jawaban_tepat_id }}</td>
            <td>{{ $item->pertanyaan_votes_id }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection