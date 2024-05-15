@extends('layout.nav')
@section('title', 'Shop')
@section('content')
    <section>
        <div class="container fade-in">
            <img src="{{ asset('img/img1.png') }}" class="background" alt="" />

            <img src="{{ asset('img/img2.png') }}" class="parpum1" alt="" />

            <div class="redsco text-center">
                <h1><span class="red-text">Red</span><span class="white-text">Sco.</span></h1>
            </div>

            <div class="deskrip text-center mt-auto ">
                <h3>FRAGRANCE FINESSE</h3>
            </div>
        </div>
        <main>
            <div class="album py-5 bg-body-black fade-in">
                <div class="container">
                    <div class="row">
                        @forelse ($product as $product)
                            <div class="col-6 col-sm-6 col-lg-3 g-3 fade-in">
                                <div class="col">
                                    <a href="{{ route('user.detail', $product->id) }}"
                                        class="link-offset-2 link-underline link-underline-opacity-0">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <img src="{{ asset('img/produk/' . $product->gambar) }}" style="width: 100%"
                                                    alt="" class="img-fluid rounded mb-3 d-block">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="row">
                                                        <div class="col-6 login-text1">
                                                            <span class="text-start fs-5 text-truncate align-middle">
                                                                {{ $product->varian }}
                                                            </span>
                                                        </div>
                                                        <div class="col-6 text-end fs-6">
                                                            <span class="text-red align-middle">Red</span><span
                                                                class="text-dark align-middle">Sco.</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p class="fs-4 card-text login-text1">
                                                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 fade-in">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 login-text1">
                                                <span>Tidak Ada Produk</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
