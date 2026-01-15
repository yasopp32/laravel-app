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
                    <td>
                         <a href="{{ url('merek/' . $row->id_merek . '/edit') }}"
                            class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ url('merek/' . $row->id_merek) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
