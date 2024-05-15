@extends('layout.nav')
@section('title', 'Login')
@section('content')
    <div class="container-fluid fade-in">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-7">
                <img src="{{ asset('img/img19.png') }}" alt="Parfum Image" class="img-fluid mx-auto d-block" style="width: 90%">
            </div>
            <div class="col-md-5">
                <div class="login-container">
                    <h2 class="text-end mb-3">LOGIN</h2>
                    <h1 class="text-start"><span class="text-danger">Red</span><span>Sco.</span></h1>
                    <form method="POST" action="">
                        @csrf
                        <div class="login-text1">
                            <div class="mb-3">
                                <span class="text-start">Belum punya akun?</span>
                                <a href="{{ route('auth.registration') }}"
                                    class="text-end text-danger link-offset-2 link-underline link-underline-opacity-0">Buat
                                    akun</a>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">
                                    <h5>Email</h5>
                                </label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" placeholder="Masukkan email" required autocomplete="email"
                                    autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">
                                    <h5>Password</h5>
                                </label>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Masukkan password" required autocomplete="current-password">
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
