@extends('admin.master')
@section('title', 'Sales')
@section('content')
    @include('admin.sidebar')
    <div class="content">
        @include('admin.navbar')
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Data Penjualan</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal Pesanan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Barang</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sales as $sale)
                                        <tr>
                                            <td>{{ $sale->created_at->format('d M Y H:i:s') }}</td>
                                            <td>{{ $sale->nama_pemesan }}</td>
                                            <td>{{ $sale->produk->varian }}</td>
                                            <td>{{ number_format($sale->harga, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($sale->status == 'belum_bayar')
                                                    Belum Bayar
                                                @elseif($sale->status == 'dikemas')
                                                    Dikemas
                                                @elseif($sale->status == 'dikirim')
                                                    Dikirim
                                                @elseif($sale->status == 'selesai')
                                                    Selesai
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#detailSalesModal_{{ $sale->id }}"
                                                    type="button">Detail</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="6">Tidak ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($sales as $sale)
        <div class="modal fade" id="detailSalesModal_{{ $sale->id }}" tabindex="-1"
            aria-labelledby="detailSalesModalLabel_{{ $sale->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailSalesModalLabel_{{ $sale->id }}">Detail Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('admin.updateStatus', ['id' => $sale->id]) }}">
                            @csrf
                            @method('PUT')
                            <h6>Nama Pemesan</h6>
                            <div class="bg-dark mb-3 ps-3 py-2 rounded">
                                <label>{{ $sale->nama_pemesan }}</label>
                            </div>
                            <h6>Varian</h6>
                            <div class="bg-dark mb-3 ps-3 py-2 rounded">
                                <label>{{ $sale->produk->varian }}</label>
                            </div>
                            <h6>Jumlah</h6>
                            <div class="bg-dark mb-3 ps-3 py-2 rounded">
                                <label>{{ $sale->jumlah }}</label>
                            </div>
                            <h6>Harga</h6>
                            <div class="bg-dark mb-3 ps-3 py-2 rounded">
                                <label>{{ number_format($sale->harga, 0, ',', '.') }}</label>
                            </div>
                            <h6>Alamat</h6>
                            <div class="bg-dark mb-3 ps-3 py-2 rounded">
                                <label>{{ $sale->alamat }}</label>
                            </div>
                            @if ($sale->status == 'dikemas' || $sale->status == 'dikirim')
                                <h6>Status Pesanan</h6>
                                <select name="status" id="statusSelect" class="form-select mb-3"
                                    aria-label="Default select example">
                                    <option value="dikemas" {{ $sale->status == 'dikemas' ? 'selected' : '' }}>
                                        Dikemas
                                    </option>
                                    <option value="dikirim" {{ $sale->status == 'dikirim' ? 'selected' : '' }}>
                                        Dikirim
                                    </option>
                                </select>
                                <div id="buktiPembayaran">
                                    <h6>Bukti Pembayaran</h6>
                                    <button class="btn btn-primary mb-3" data-bs-toggle="modal"
                                        data-bs-target="#buktiPembayaran_{{ $sale->id }}" type="button">Lihat Bukti
                                        Pembayaran</button>
                                </div>
                                <div id="nomorResi">
                                    <h6>Nomor Resi</h6>
                                    <input id="nomorResiInput" class="form-control mb-3" name="resi" type="text"
                                        placeholder="Masukkan nomor resi">
                                </div>
                                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($sales as $sale)
        <div class="modal fade" id="buktiPembayaran_{{ $sale->id }}" tabindex="-1"
            aria-labelledby="buktiPembayaranLabel_{{ $sale->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h5 class="modal-title" id="buktiPembayaranLabel_{{ $sale->id }}">Bukti Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <img src="{{ asset('img/bukti/' . $sale->bukti) }}" class="rounded mx-auto d-block img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
