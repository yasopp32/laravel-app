@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Tambah Mobil Baru</h1>

    <form action="{{ route('mobil.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="id_merek">Merek Mobil</label>
        <select name="id_merek" id="id_merek" class="form-control" required>
            <option value="">Pilih Merek</option>
            @foreach ($merek as $m)
                <option value="{{ $m->id_merek }}">{{ $m->nama_merek }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="nama_mobil">Nama Mobil</label>
        <input type="text" name="nama_mobil" id="nama_mobil" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="number" name="tahun" id="tahun" class="form-control">
    </div>

    <button type="submit">Simpan</button>
</form>

</div>
<footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
@endsection
