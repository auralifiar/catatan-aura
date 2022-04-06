@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('register') }}" class="p-3">
    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <input id="text" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik"
                    value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="Input NIK">

                @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <input id="nama" type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    required autocomplete="current-nama" placeholder="Input Nama Lengkap">

                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <input type="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" name="password"
                        value="{{ old('password') }}" required autocomplete="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
            </div>
            <div class="d-flex">
                <a class="btn btn-secondary" href="{{ route('login') }}">
                    Sudah punya akun?
                </a>
                <button type="submit" class="btn btn-info text-white ms-auto">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </div>
</form>
@endsection