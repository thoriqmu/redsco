@extends('layout.nav')
@section('title', 'Product Payment')
@section('content')
    <br>
    <div class="container mt-5 fade-in">
        <div class="card login-text1">
            <div class="card-body">
                <h5 class="card-title">Lakukan Pembayaran</h5>
                <h6 class="card-subtitle mb-1">Transfer dengan nominal</h6>
                <h6 class="card-subtitle text-danger mb-1">Rp {{ number_format($pesanan->harga, 0, ',', '.') }}</h6>
                <h6 class="card-subtitle mb-1">Pada salah satu rekening di bawah</h6>
                <div class="my-5 align-items-center">
                    <div class="row">
                        <div class="col-6 text-end">
                            <h6>BNI - THORIQ MUCHLISHIN</h6>
                            <h6>1726675276</h6>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/img22.png') }}" alt="BNI"
                                class="img-fluid mx-auto d-block float-start" style="width: 40%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-end">
                            <h6>Shopeepay</h6>
                            <h6>081357596795</h6>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/img21.png') }}" alt="Shopeepay"
                                class="img-fluid mx-auto d-block float-start" style="width: 40%">
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('user.paid', $pesanan->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-7 text-start">
                            <h5 class="card-title">Bukti Pembayaran</h5>
                        </div>
                        <div class="col-5 text-end">
                            <input class="form-control" type="file" name="bukti" id="formFile" required>
                            @error('bukti')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-danger">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
