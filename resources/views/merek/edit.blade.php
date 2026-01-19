@extends('layouts.dashboard')

@section('content')
    <h2>Edit Daftar Mobil</h2>

    <div class="card">
        <div class="card-body">

           <form action="{{ route('merek.update', $row->id_merek) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menambahkan method PUT -->
                <div class="mb-3">
                    <label for="nama_merek" class="form-label fw-bold">Nama Merek</label>
                    <input type="text" class="form-control" name="nama_merek" id="nama_merek" value="{{ $row->nama_merek }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
                        
        </div>
    </div>
    <footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
@endsection