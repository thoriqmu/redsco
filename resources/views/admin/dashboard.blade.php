@extends('admin.master')
@section('title', 'Dashboard')
@section('content')
    @include('admin.sidebar')
    <div class="content">
        @include('admin.navbar')
        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Jumlah Produk</p>
                            <h6 class="mb-0">{{ $countProduct }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Jumlah Stok</p>
                            <h6 class="mb-0"> {{ $countStok }} </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Semua Pesanan</p>
                            <h6 class="mb-0"> {{ $countProgress }} </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Pesanan Selesai</p>
                            <h6 class="mb-0"> {{ $countFinish }} </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Riwayat Pesanan Terakhir</h6>
                    <a href="{{ route('admin.sales') }}">Tampilkan Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Jenis Parfum</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latestOrders as $order)
                                <tr>
                                    <td>{{ $order->created_at->format('d M Y H:i:s') }}</td>
                                    <td>{{ $order->nama_pemesan }}</td>
                                    <td>{{ $order->produk->varian }}</td>
                                    <td>{{ number_format($order->harga, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($order->status == 'belum_bayar')
                                            Belum Bayar
                                        @elseif($order->status == 'dikemas')
                                            Dikemas
                                        @elseif($order->status == 'dikirim')
                                            Dikirim
                                        @elseif($order->status == 'selesai')
                                            Selesai
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->
    </div>
@endsection
