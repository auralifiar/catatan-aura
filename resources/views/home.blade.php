@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="bg-white p-3">
        <h3>Riwayat Perjalanan</h3>
        <ul class="mt-3">
            @forelse ($catatans as $catatan)
                <li>{!! $catatan->suhu !!}° <span class="text-primary">pada</span> {{ $catatan->tanggal }} <span class="text-primary">di</span> {!! $catatan->lokasi !!}</li>                
            @empty              
                <li class="text-danger">Catatan masih kosong.</li>
            @endforelse
        </ul>
    </div>
</div>

@endsection