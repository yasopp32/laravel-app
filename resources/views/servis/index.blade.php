@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Daftar Servis</h1>

    <a href="{{ route('servis.create') }}" class="btn btn-primary mb-3">Detail Servis</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Merek</th>
                <th>Jenis Servis</th>
                <th>Biaya</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($servis as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>

                    {{-- Nama mobil --}}
                    <td>{{ $s->mobil->nama_mobil ?? '-' }}</td>

                    {{-- Nama merek --}}
                    <td>{{ $s->mobil->merek->nama_merek ?? '-' }}</td>

                    <td>{{ $s->nama_servis }}</td>

                    <td>Rp {{ number_format($s->biaya, 0, ',', '.') }}</td>

                    <td>{{ $s->keterangan ?? '-' }}</td>

                    <td>
                        <a href="{{ route('servis.edit', $s->id_servis) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('servis.destroy', $s->id_servis) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
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
