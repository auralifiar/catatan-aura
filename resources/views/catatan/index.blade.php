@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card border-0">
        <div class="card-header text-center font-monospace border-0 bg-info text-white">
            <h3>Semua Catatan</h3>
        </div>
        <div class="card-body">
            @if ($message = Session::get('berhasil'))
            <div class="alert alert-success alert-block mt-2">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($message = Session::get('gagal'))
            <div class="alert alert-danger alert-block mt-2">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Suhu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($catatans as $catatan)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $catatan->tanggal }}</td>
                        <td>{!! $catatan->waktu !!}</td>
                        <td>{!! $catatan->lokasi !!}</td>
                        <td>{!! $catatan->suhu !!}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Yakin ingin menghapus?');"
                                action="{{ route('catatan.destroy', $catatan->id) }}" method="POST">
                                <a href="{{ route('catatan.edit', $catatan->id) }}" class="btn btn-sm btn-warning text-white"><i
                                        class="bi bi-pencil-fill"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Data masih kosong.</td>
                    </tr>
                    @endforelse
            </table>
        </div>
    </div>
</div>

@endsection