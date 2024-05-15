@extends('layout.nav')
@section('title', 'Shop - ' . $product->varian)
@section('content')
    <div class="container-fluid fade-in">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-6">
                <div class="img-container my-5">
                    <img src="{{ asset('img/produk/' . $product->gambar) }}" alt="Parfum Image"
                        class="img-fluid mx-auto d-block">
                    <div class="img-shadow"></div>
                </div>
            </div>
            <div class="col-md-6 login-text1">
                <form method="POST" action="{{ route('user.buy') }}">
                    @csrf
                    <input type="hidden" name="id_produk" value="{{ $product->id }}">
                    <div class="container pe-5">
                        <h1 class="text-start mb-3 fw-bold">{{ $product->varian }}</h2>
                            <div class="row">
                                <div class="col-md-6 text-start">{{ number_format($product->terjual, 0, ',', '.') }} Terjual
                                </div>
                                <div class="col-md-6 text-end">Stok : {{ $product->stok }}</div>
                            </div>
                            <h5 class="mt-2 text-start">Rp {{ number_format($product->harga, 0, ',', '.') }}</h5>
                            <div class="garis2 my-3"></div>
                            <h5 class="text-start">Deskripsi Produk</h5>
                            <p class="text-start text-break">{{ $product->deskripsi }}</p>
                            <h5 class="text-start">Tipe Aroma</h5>
                            <div class="list-group-numbered">
                                @foreach (explode(',', $product->tipe) as $tipe)
                                    <li class="list-group-item">{{ $tipe }}</li>
                                @endforeach
                            </div>
                            <div class="align-items-center row mt-3">
                                <div class="col-4 col-xl-3">
                                    <div class="input-group">
                                        <button class="btn btn-danger" type="button" id="btnMinus">-</button>
                                        <input id="quantity" name="quantity" class="form-control text-center"
                                            value="1" min="1" readonly>
                                        <button class="btn btn-danger" type="button" id="btnPlus">+</button>
                                    </div>
                                </div>
                                <div class="col-8 col-xl-9 d-flex justify-content-end align-items-center">
                                    <a class="fs-1 bi bi-cart-plus-fill text-danger me-5"
                                        href="{{ route('user.cart', ['id' => $product->id]) }}" role="button"></a>
                                    <button type="submit" class="btn btn-danger">Beli Sekarang</button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
