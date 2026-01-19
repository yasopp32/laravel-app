@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Daftar Mobil</h1>

    <a href="{{ route('mobil.create') }}" class="btn btn-primary mb-3">Tambah Detail Mobil</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Merek</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobil as $index => $m)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $m->nama_mobil }}</td>
                    <td>{{ $m->merek->nama_merek }}</td>
                    <td>{{ $m->tahun }}</td>
                    <td>
                        <a href="{{ route('mobil.edit', $m->id_mobil) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mobil.destroy', $m->id_mobil) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
@endsection
