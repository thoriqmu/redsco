<br>
<div class="row justify-content-center fade-in">
    <div class="col-10 col-lg-7">
        <div class="container my-5">
            <div class="card text-center">
                <div class="card-body login-text1">
                    {{-- <div class="row col-sm-12 col-md-12 d-flex justify-content-center"> --}}
                    <ul class="nav justify-content-center nav-underline item-keranjang row">
                        <li class="col-md d-flex justify-content-center">
                            <a class="nav-link {{ request()->is('keranjang') ? 'link-danger active' : 'link-dark' }}"
                                href="{{ route('keranjang') }}">Keranjang</a>
                        </li>
                        <li class="col-md d-flex justify-content-center">
                            <a class="nav-link {{ request()->is('keranjang/belum_bayar') ? 'link-danger active' : 'link-dark' }}"
                                href="{{ route('keranjang.status', 'belum_bayar') }}">Belum
                                Bayar</a>
                        </li>
                        <li class="col-md d-flex justify-content-center">
                            <a class="nav-link {{ request()->is('keranjang/dikemas') ? 'link-danger active' : 'link-dark' }}"
                                href="{{ route('keranjang.status', 'dikemas') }}">Dikemas</a>
                        </li>
                        <li class="col-md d-flex justify-content-center">
                            <a class="nav-link {{ request()->is('keranjang/dikirim') ? 'link-danger active' : 'link-dark' }}"
                                href="{{ route('keranjang.status', 'dikirim') }}">Dikirim</a>
                        </li>
                        <li class="col-md d-flex justify-content-center">
                            <a class="nav-link {{ request()->is('keranjang/selesai') ? 'link-danger active' : 'link-dark' }}"
                                href="{{ route('keranjang.status', 'selesai') }}">Selesai</a>
                        </li>
                    </ul>

                    {{-- </div> --}}
                </div>
            </div>
            <div class="card text-center border-dark my-3">
                @yield('content1')
            </div>
        </div>
    </div>
</div>
@endsection
