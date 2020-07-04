@extends('adminlte.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <table class="table">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>{{ $item->judul }} </td>
                <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td>{{ $item->isi }} </td>
                </tr>
                <tr>
                    <td>Tanggal Dibuat</td>
                    <td>:</td>
                    <td>{{ $item->tanggal_dibuat }} </td>
                </tr>
                <tr>
                    <td>Tanggal Diperbaharui</td>
                    <td>:</td>
                    <td>{{ $item->tanggal_diperbaharui }} </td>
                </tr>
                <tr>
                    <td>Jawaban Tepat Id</td>
                    <td>:</td>
                    <td>{{ $item->jawaban_tepat_id }} </td>
                </tr>
                <tr>
                    <td>Pertanyaan Votes Id</td>
                    <td>:</td>
                    <td>{{ $item->pertanyaan_votes_id }} </td>
                </tr>
            </table>
        </div>
    </div>

</div>

@endsection