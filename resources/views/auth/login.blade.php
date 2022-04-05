@extends('layouts.auth')

@section('content')
                    <form method="POST" action="{{ route('login') }}" class="p-3">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input id="text" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="Input NIK">
    
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="nama" type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" required autocomplete="current-nama" placeholder="Input Nama Lengkap">

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex">
                                    <a class="btn btn-secondary" href="{{ route('register') }}">
                                        Belum punya akun?
                                    </a>
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
@endsection