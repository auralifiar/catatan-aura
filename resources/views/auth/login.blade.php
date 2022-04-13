@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('login') }}" class="p-3">
    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <input id="text" type="nik" minlength="15" class="form-control @error('nik') is-invalid @enderror" name="nik"
                    value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="NIK">

                @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" value="{{ old('password') }}" required autocomplete="password"  placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="d-flex">
                <a class="btn btn-secondary" href="{{ route('register') }}">
                    Belum punya akun?
                </a>
                <button type="submit" class="btn btn-info text-white ms-auto">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </div>
</form>
@endsection