@extends('layouts.app')

@section('content')
    <h2>Tambah Daftar Mobil</h2>

    <div class="card">
        <div class="card-body">

            <form action="{{ url('merek') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_merek" class="form-label fw-bold">Merek Mobil</label>
                    <input type="text" class="form-control" name="nama_merek" id="nama_merek" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </div>
@endsection