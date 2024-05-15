@extends('layout.nav')
@section('title', 'Register')
@section('content')
    <div class="container-fluid fade-in">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-7">
                <img src="{{ asset('img/img19.png') }}" alt="Parfum Image" class="img-fluid mx-auto d-block" style="width: 90%">
            </div>
            <div class="col-md-5">
                <div class="login-container">
                    <h2 class="text-end mb-3">REGISTER</h2>
                    <h1 class="text-start"><span class="text-danger">Red</span><span>Sco.</span></h1>
                    <form method="POST" action="{{ route('auth.registration.process') }}">
                        @csrf
                        <div class="login-text1">
                            <div class="mb-3">
                                <span class="text-start">Sudah punya akun?</span>
                                <a href="{{ route('auth.login') }}"
                                    class="text-end text-danger link-offset-2 link-underline link-underline-opacity-0">Login</a>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">
                                    <h5>Username</h5>
                                </label>
                                <input id="name" type="text" class="form-control" name="name"
                                    value="{{ old('name') }}" placeholder="Buat username" required autocomplete="email"
                                    autofocus>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">
                                    <h5>Email</h5>
                                </label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('ezmail') }}" placeholder="Buat email" required autocomplete="email"
                                    autofocus>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="password">
                                    <h5>Password</h5>
                                </label>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Buat password" required autocomplete="current-password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">
                                    <h5>Konfirmasi Password</h5>
                                </label>
                                <input id="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Ulangi password" required>
                            </div>

                            <div class="form-group">
                                <div class="d-grid d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger btn-block">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
