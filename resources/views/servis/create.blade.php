@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Tambah Detail Servis</h1>

    <form action="{{ route('servis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_mobil" class="form-label">Pilih Mobil</label>
            <select name="id_mobil" class="form-control" required>
                <option value="">-- Pilih Mobil --</option>
                @foreach ($mobil as $m)
                    <option value="{{ $m->id_mobil }}">
                        {{ $m->nama_mobil }} ({{ $m->merek->nama_merek }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_servis" class="form-label">Jenis Servis</label>
            <input type="text" name="nama_servis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="biaya" class="form-label">Biaya</label>
            <input type="number" name="biaya" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
@endsection
