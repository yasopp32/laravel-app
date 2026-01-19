@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Mobil</h1>

    <form action="{{ route('mobil.update', $mobil->id_mobil) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id_merek">Merek Mobil</label>
            <select name="id_merek" id="id_merek" class="form-control" required>
                @foreach ($merek as $m)
                    <option value="{{ $m->id_merek }}" {{ $mobil->id_merek == $m->id_merek ? 'selected' : '' }}>
                        {{ $m->nama_merek }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nama_mobil">Nama Mobil</label>
            <input type="text" name="nama_mobil" id="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}" required>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" value="{{ $mobil->tahun }}">
        </div>

        <button type="submit">Update</button>
    </form>
</div>
<footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
@endsection
