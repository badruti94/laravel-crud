@extends('adminlte.master')

@section('content')

<a class="btn btn-primary" href="{{ url('pertanyaan/create') }}">Tambah Data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->isi }}</td>
            <td>
                <a href="{{ url('/pertanyaan/' . $item->id) }}" class="btn btn-primary">Show</a>
                <a href="{{ url('/pertanyaan/' . $item->id . '/edit') }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <form action="{{ url('/pertanyaan/' . $item->id) }}" method="post" style="display: inline;">
                @csrf
                @method('delete')

                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection