@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header bg-light">
        <h3 class="font-monospace">Riwayat Perjalanan</h3>
        </div>
    <div class="card-body">
    <ul class="mt-3">
            @forelse ($catatans as $catatan)
                <li><span class="text-primary">Tanggal</span> {{ $catatan->tanggal }} <span class="text-primary">Di</span> {!! $catatan->lokasi !!}, <span class="text-primary">Suhu</span> {!! $catatan->suhu !!}°</li>                
            @empty              
                <li class="text-danger">Catatan masih kosong.</li>
            @endforelse
        </ul>
    </div>
    </div>

@endsection