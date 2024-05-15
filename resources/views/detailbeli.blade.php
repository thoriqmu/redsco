@extends('layout.nav')
@section('title', 'Customer Detail')
@section('content')
    <br>
    <form method="POST" action="{{ route('user.order') }}">
        @csrf
        <input type="hidden" name="id_produk" value="{{ $product->id }}">
        <input type="hidden" name="jumlah" value="{{ $quantity }}">
        <input type="hidden" name="harga" value="{{ $product->harga * $quantity }}">
        <div class="container mt-5 fade-in">
            <div class="card mb-3 login-text1">
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Nama Pemesan</h5>
                        <input name="nama_pemesan" type="text" class="form-control" id="exampleFormControlInput1"
                            required>
                        @error('nama_pemesan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Alamat Pengiriman</h5>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card login-text1">
                <div class="card-body">
                    <h5 class="card-title">Rincian Pesanan</h5>
                    <img src="{{ asset('img/produk/' . $product->gambar) }}" class="img-fluid mb-2" style="width: 20%">
                    <p>Nama Produk: {{ $product->varian }}</p>
                    <p>Jumlah: {{ $quantity }}</p>
                    <p>Total Harga: Rp {{ number_format($product->harga * $quantity, 0, ',', '.') }}</p>
                    <button type="submit" class="btn btn-danger mt-1">Selanjutnya</button>
                </div>
            </div>
        </div>
    </form>
@endsection
