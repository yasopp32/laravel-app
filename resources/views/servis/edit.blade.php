@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Servis</h1>

    <form action="{{ route('servis.update', $servis->id_servis) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Pilih Mobil</label>
            <select name="id_mobil" class="form-control" required>
                @foreach ($mobil as $m)
                    <option value="{{ $m->id_mobil }}"
                        {{ $servis->id_mobil == $m->id_mobil ? 'selected' : '' }}>
                        {{ $m->nama_mobil }} ({{ $m->merek->nama_merek }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Servis</label>
            <input type="text" name="nama_servis" class="form-control"
                   value="{{ $servis->nama_servis }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Biaya</label>
            <input type="number" name="biaya" class="form-control"
                   value="{{ $servis->biaya }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $servis->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
@endsection
