@extends('layouts.dashboard')

@section('content')

    <h2>Edit Merek</h2>

    <form action="/merek/{{ $merek->merek_id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_merek" class="form-label fw-bold">Nama Merek</label>
            <input type="text" class="form-control" name="nama_merek" id="nama_merek" value="{{ $merek->merek_nama }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection