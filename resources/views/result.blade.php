<!-- resources/views/recommendation.blade.php -->

@extends('layout.nav')
@section('title', 'Rekomendasi Parfum')
@section('content')
    <br>
    <div class="container mt-5 fade-in">
        <div class="card login-text1">
            <div class="card-body text-center">
                @if ($perfume == 'Esmeralda')
                    <h5 class="card-title">Rekomendasi Parfum</h5>
                    <p class="card-text">Parfum yang sesuai dengan karakteristik anda adalah</p>
                    <img src="{{ asset('img/produk/varian_1.jpg') }}" class="rounded mx-auto d-block img-fluid mb-2"
                        style="width: 30%">
                    <h5 class="card-title">ESMERALDA</h5>
                    <p>Menghadirkan aroma yang kuat dan memikat, menghadirkan kekuatan dan daya tarik yang tak tertandingi.
                        Esmeralda adalah pilihan yang sempurna bagi mereka yang ingin memancarkan kepercayaan diri dan
                        pesona yang tak terbantahkan.</p>
                    <a href="{{ route('user.shop', '1') }}" class="btn btn-danger">Lihat Produk</a>
                @elseif ($perfume == 'Starboy')
                    <h5 class="card-title">Rekomendasi Parfum</h5>
                    <p class="card-text">Parfum yang sesuai dengan karakteristik anda adalah</p>
                    <img src="{{ asset('img/produk/varian_2.jpg') }}" class="rounded mx-auto d-block img-fluid mb-2"
                        style="width: 30%">
                    <h5 class="card-title">STARBOY</h5>
                    <p>Merupakan aroma yang kuat dan memikat, menghadirkan kekuatan dan daya tarik yang tak tertandingi.
                        Esmeralda adalah pilihan yang sempurna bagi mereka yang ingin memancarkan kepercayaan diri dan
                        pesona yang tak terbantahkan.</p>
                    <a href="{{ route('user.shop', '2') }}" class="btn btn-danger">Lihat Produk</a>
                @elseif ($perfume == 'Vanille')
                    <h5 class="card-title">Rekomendasi Parfum</h5>
                    <p class="card-text">Parfum yang sesuai dengan karakteristik anda adalah</p>
                    <img src="{{ asset('img/produk/varian_3.jpg') }}" class="rounded mx-auto d-block img-fluid mb-2"
                        style="width: 30%">
                    <h5 class="card-title">VANILLE</h5>
                    <p>Menawarkan aroma yang kuat dan memikat, menghadirkan kekuatan dan daya tarik yang tak tertandingi.
                        Esmeralda adalah pilihan yang sempurna bagi mereka yang ingin memancarkan kepercayaan diri dan
                        pesona yang tak terbantahkan.</p>
                    <a href="{{ route('user.shop', '3') }}" class="btn btn-danger">Lihat Produk</a>
                @else
                    <h5 class="card-title">Rekomendasi Parfum</h5>
                    <p class="card-text">Parfum yang sesuai dengan karakteristik anda adalah</p>
                    <img src="{{ asset('img/produk/varian_4.jpg') }}" class="rounded mx-auto d-block img-fluid mb-2"
                        style="width: 30%">
                    <h5 class="card-title">EUPHORIA</h5>
                    <p>Menyuguhkan keharuman manis yang mendebarkan dan memikat. Setiap semprotan Euphoria membangkitkan
                        perasaan gembira dan kegembiraan yang tak terlupakan. Ini adalah parfum yang cocok untuk mereka yang
                        mencari pengalaman yang menyenangkan dan menggairahkan</p>
                    <a href="{{ route('user.shop', '4') }}" class="btn btn-danger">Lihat Produk</a>
                @endif
            </div>
        </div>
    </div>
@endsection
