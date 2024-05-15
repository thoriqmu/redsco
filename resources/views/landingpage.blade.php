@extends('layout.nav')
@section('title', 'Home')
@section('content')
    {{-- <br>
    <br>
    <br> --}}
    <section>
        <div class="container">
            <div class="fade-in">
                <img src="{{ asset('img/img1.png') }}" class="background" alt="" />
                <img src="{{ asset('img/img2.png') }}" class="parpum1" alt="" />
                <div class="redsco text-center">
                    <h1><span class="red-text">Red</span><span class="white-text">Sco.</span></h1>
                </div>
                <div class="deskrip text-center mt-auto ">
                    <h3>FRAGRANCE FINESSE</h3>
                </div>
                <a href="{{ route('user.shop') }}" class="order mt-auto">Order Now</a>
            </div>
            <div class="fade-in">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-slide="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/img3.png') }}" class="" alt="" />
                            <img src="{{ asset('img/img4.png') }}" class="layer1" alt="" />
                            <h1 class="layer3"><span class="red-text">ESMERA</span><span class="white-text">LDA</span></h1>
                            <img src="{{ asset('img/img5.png') }}" class="layer2" alt="" />
                            <div class="daftar">
                                <h4>ESMERALDA</h4>
                                <h2>01</h2>
                            </div>
                            <div class="deskripsi">
                                <div class="garis"></div>
                                <h3>Aroma yang kuat dan memikat, menghadirkan kekuatan dan daya tarik yang tak tertandingi
                                </h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/img3.png') }}" class="" alt="" />
                            <img src="{{ asset('img/img4.png') }}" class="layer1" alt="" />
                            <h1 class="layer3"><span class="red-text">STARB</span><span class="white-text">OY</span></h1>
                            <img src="{{ asset('img/img13.png') }}" class="layer2" alt="" />
                            <div class="daftar">
                                <h4>STARBOY</h4>
                                <h2>02</h2>
                            </div>
                            <div class="deskripsi">
                                <div class="garis"></div>
                                <h3>Aroma yang eksklusif dan memikat, membuat siapa pun terpesona dan meninggalkan kesan
                                    mendalam
                                </h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/img3.png') }}" class="" alt="" />
                            <img src="{{ asset('img/img4.png') }}" class="layer1" alt="" />
                            <h1 class="layer3"><span class="red-text">VANIL</span><span class="white-text">LE</span></h1>
                            <img src="{{ asset('img/img15.png') }}" class="layer2" alt="" />
                            <div class="daftar">
                                <h4>VANILLE</h4>
                                <h2>03</h2>
                            </div>
                            <div class="deskripsi">
                                <div class="garis"></div>
                                <h3>Aroma yang tenang dan damai, membawa kesegaran dalam setiap hembusan yang lembut</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/img3.png') }}" class="" alt="" />
                            <img src="{{ asset('img/img4.png') }}" class="layer1" alt="" />
                            <h1 class="layer3"><span class="red-text">EUPHO</span><span class="white-text">RIA</span></h1>
                            <img src="{{ asset('img/img17.png') }}" class="layer2" alt="" />
                            <div class="daftar">
                                <h4>EUPHORIA</h4>
                                <h2>04</h2>
                            </div>
                            <div class="deskripsi">
                                <div class="garis"></div>
                                <h3>Keharuman manis yang memikat dan membangkitkan perasaan gembira yang tak terlupakan</h3>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container-relative fade-in">
            <img src="{{ asset('img/img20.png') }}" alt="" style="width: 100%">
            <a href="{{ route('user.kuisioner') }}" class="kuisioners mt-auto">Start Now</a>
        </div>
    </section>
@endsection
