@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card border-0">
        <div class="card-header text-center font-monospace border-0 bg-info text-white">
            <h3>Ubah Catatan Perjalanan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('catatan.update', $catatan->id) }}" method="POST">                    
                @csrf
                @method('patch')
                <div class="mt-3 mb-3">
                    <label>Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal', $catatan->tanggal) }}">
                    @error('tanggal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Waktu</label>
                    <input type="time" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('tanggal', $catatan->waktu) }}">
                    @error('waktu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Lokasi</label>
                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('tanggal', $catatan->lokasi) }}">
                    @error('lokasi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Suhu</label>
                    <input type="text" class="form-control @error('suhu') is-invalid @enderror" name="suhu" value="{{ old('tanggal', $catatan->suhu) }}">
                    @error('suhu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info text-white">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection