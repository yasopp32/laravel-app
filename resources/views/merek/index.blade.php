@extends('layouts.app')

@section('content')

    <h2>Daftar Mobil</h2>

    <a href="{{ url('merek/create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Merek Mobil</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->id_merek }}</td>
                    <td>{{ $row->nama_merek }}</td>
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection