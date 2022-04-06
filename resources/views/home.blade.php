@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card border-0">
        <div class="card-header bg-info border-0 text-center">
            <h3 class="font-monospace text-white">Riwayat Perjalanan</h3>
        </div>
    <div class="card-body">
    <ul class="mt-3">
            @forelse ($catatans as $catatan)
                <li class="my-2"><span class="text-info">Tanggal</span> {{ $catatan->tanggal }} <span class="text-info">Di</span> {!! $catatan->lokasi !!}, <span class="text-info">Suhu</span> {!! $catatan->suhu !!}°</li>                
            @empty              
                <li class="text-danger my-2">Catatan masih kosong.</li>
            @endforelse
        </ul>
    </div>
    </div>

@endsection