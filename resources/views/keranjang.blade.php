@extends('layout.nav')
@extends('navkeranjang')
@section('title', 'Keranjang')
@section('content')
@section('content1')
    <div class="card-body login-text1">
        <div class="row">
            <div class="col-12">
                <h5 class="text-start">Rincian Pesanan</h5>
            </div>
        </div>
        @if (isset($keranjang))
            @foreach ($keranjang as $keranjang)
                <form method="POST" action="{{ route('user.buy') }}">
                    @csrf
                    <input type="hidden" name="id_produk" value="{{ $keranjang->id_produk }}">
                    <input type="hidden" name="quantity" value="{{ $keranjang->jumlah }}">
                    <input type="hidden" name="id_keranjang" value="{{ $keranjang->id }}">
                    <div class="container bg-secondary bg-opacity-25 mb-4 py-2">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('img/produk/' . $keranjang->produk->gambar) }}" class="img-fluid">
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <h5 class=" text-start card-title">{{ $keranjang->produk->varian }}</h5>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-start">Rp. {{ number_format($keranjang->harga, 0, ',', '.') }}</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end">X {{ $keranjang->jumlah }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="garis2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-12">
                                <div class="text-end">
                                    <a href="{{ route('user.cartDelete', $keranjang->id) }}" class="btn btn-dark">Hapus</a>
                                    <button type="submit" class="btn btn-danger">Buat Pesanan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        @elseif(isset($pesanan))
            @foreach ($pesanan as $pesanan)
                <div class="container bg-secondary bg-opacity-25 mb-4 py-2">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset('img/produk/' . $pesanan->produk->gambar) }}" class="img-fluid">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <h5 class=" text-start card-title">{{ $pesanan->nama_pemesan }} -
                                    {{ $pesanan->produk->varian }}</h5>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6 class="text-start">Rp.
                                        {{ number_format($pesanan->harga, 0, ',', '.') }}</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-end">X {{ $pesanan->jumlah }}</h6>
                                </div>
                            </div>
                            <h6 class="text-start">{{ $pesanan->alamat }}</h6>
                            @if ($pesanan->resi == !null)
                                <h6 class="text-start">No resi : {{ $pesanan->resi }}</h6>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="garis2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($pesanan->status == 'belum_bayar')
                        <div class="row justify-content-end mt-1">
                            <div class="col-12">
                                <div class="text-end">
                                    <a href="{{ route('user.deleteUnpaid', $pesanan->id) }}"
                                        class="btn btn-dark">Batalkan</a>
                                    <a href="{{ route('user.pay', $pesanan->id) }}" class="btn btn-danger">Bayar
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @elseif ($pesanan->status == 'dikirim')
                        <div class="row justify-content-end mt-1">
                            <div class="col-12">
                                <div class="text-end">
                                    <a href="{{ route('user.orderComplete', $pesanan->id) }}"
                                        class="btn btn-danger">Diterima</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    @endsection
