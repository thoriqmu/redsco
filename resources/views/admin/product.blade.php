@extends('admin.master')
@section('title', 'Product')
@section('content')
    @include('admin.sidebar')
    <div class="content">
        @include('admin.navbar')
        <!-- Widget Start -->
        <div class="container-fluid p-4">
            <div class="row g-4">
                @forelse ($product as $product)
                    <div class="col-lg-6">
                        <div class="row align-items-center h-100 bg-secondary rounded p-4 m-1">
                            <div class="text-center justify-content-between mb-2">
                                <h4 class="mb-0" style="text-transform: uppercase;">{{ $product->varian }}</h6>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-2">
                                <img src="{{ asset('img/produk/' . $product->gambar) }}" style="width: 60%" alt=""
                                    class="img-fluid img-thumbnail rounded mx-auto d-block">
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <h6 class="text-start">Harga : Rp {{ number_format($product->harga, 0, ',', '.') }}</h6>
                                <h6 class="text-start">Stok : {{ $product->stok }}</h6>
                                <h6 class="text-start">Tipe Aroma : {{ $product->tipe }}</h6>
                                <h6 class="text-start">{{ $product->deskripsi }}</h6>
                            </div>
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editProductModal_{{ $product->id }}" type="button">Edit</button>
                        </div>
                    </div>
                    <div class="modal fade" id="editProductModal_{{ $product->id }}" tabindex="-1"
                        aria-labelledby="editProductModalLabel_{{ $product->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content bg-secondary">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProductModalLabel_{{ $product->id }}">Edit Produk
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST"
                                        action="{{ route('admin.updateProduct', ['id' => $product->id]) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="varian_{{ $product->id }}"
                                                name="varian" id="floatingProduct" placeholder="exampleProduct"
                                                value="{{ $product->varian }}" required>
                                            <label for="floatingProduct">Nama Produk</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="harga_{{ $product->id }}"
                                                name="harga" id="floatingPrice" placeholder="1"
                                                value="{{ $product->harga }}" required>
                                            <label for="floatingPrice">Harga</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="stok_{{ $product->id }}"
                                                name="stok" id="floatingStock" placeholder="1"
                                                value="{{ $product->stok }}" required>
                                            <label for="floatingStock">Stok</label>
                                        </div>
                                        <div class="mb-3">
                                            <p>Tipe Aroma</p>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="strong"
                                                    name="tipe[]" value="Strong"
                                                    {{ in_array('strong', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="strong">Strong</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="captivating"
                                                    name="tipe[]" value="Captivating"
                                                    {{ in_array('captivating', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="captivating">Captivating</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sweet"
                                                    name="tipe[]" value="Sweet"
                                                    {{ in_array('sweet', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="sweet">Sweet</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="exciting"
                                                    name="tipe[]" value="Exciting"
                                                    {{ in_array('exciting', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="exciting">Exciting</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="exquisite"
                                                    name="tipe[]" value="Exquisite"
                                                    {{ in_array('exquisite', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="exquisite">Exquisite</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="intriguing"
                                                    name="tipe[]" value="Intriguing"
                                                    {{ in_array('intriguing', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="intriguing">Intriguing</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="serene"
                                                    name="tipe[]" value="Serene"
                                                    {{ in_array('serene', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="serene">Serene</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="soothing"
                                                    name="tipe[]" value="Soothing"
                                                    {{ in_array('soothing', explode(', ', $product->tipe)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="soothing">Soothing</label>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="deskripsi_{{ $product->id }}" name="deskripsi" rows="3"
                                                id="floatingTextarea" placeholder="exampleDescription" style="height: 200px;" required>{{ $product->deskripsi }}</textarea>
                                            <label for="floatingTextarea">Deskripsi</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Gambar Produk</label>
                                            <input class="form-control bg-dark" type="file"
                                                id="gambar_{{ $product->id }}" name="gambar" accept="image/*">
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="text-center align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Tidak Ada Produk</h6>
                            </div>
                        </div>
                    </div>
                @endforelse

            </div>
            <!-- Add Product -->
            <button class="btn btn-lg btn-primary btn-lg-square fixed-button"><i class="bi bi-plus"
                    data-bs-toggle="modal" data-bs-target="#addProductModal"></i></button>
        </div>
        <!-- Widget End -->

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('admin.addProduct') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="varian" name="varian"
                                    id="floatingProduct" placeholder="exampleProduct" required>
                                <label for="floatingProduct">Nama Produk</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="harga" name="harga"
                                    id="floatingPrice" placeholder="1" required>
                                <label for="floatingPrice">Harga</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="stok" name="stok"
                                    id="floatingStock" placeholder="1" required>
                                <label for="floatingStock">Stok</label>
                            </div>
                            <div class="mb-3">
                                <p>Tipe Aroma</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="strong" name="tipe[]"
                                        value="Strong">
                                    <label class="form-check-label" for="strong">Strong</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="captivating" name="tipe[]"
                                        value="Captivating">
                                    <label class="form-check-label" for="captivating">Captivating</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="sweet" name="tipe[]"
                                        value="Sweet">
                                    <label class="form-check-label" for="sweet">Sweet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="exciting" name="tipe[]"
                                        value="Exciting">
                                    <label class="form-check-label" for="exciting">Exciting</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="exquisite" name="tipe[]"
                                        value="Exuisite">
                                    <label class="form-check-label" for="exquisite">Exuisite</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="intriguing" name="tipe[]"
                                        value="Intriguing">
                                    <label class="form-check-label" for="intriguing">Intriguing</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="serene" name="tipe[]"
                                        value="Serene">
                                    <label class="form-check-label" for="serene">Serene</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="soothing" name="tipe[]"
                                        value="Soothing">
                                    <label class="form-check-label" for="soothing">Soothing</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" id="floatingTextarea"
                                    placeholder="exampleDescription" style="height: 200px;" required></textarea>
                                <label for="floatingTextarea">Deskripsi</label>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar Produk</label>
                                <input class="form-control bg-dark" type="file" id="gambar" name="gambar"
                                    accept="image/*" required>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection
