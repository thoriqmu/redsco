<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function cart() {
        $keranjang = Keranjang::where('id_user', auth()->id())->get();
        return view('keranjang', compact('keranjang'));
    }
    public function addToCart($id)
    {
        // Dapatkan data produk berdasarkan ID
        $product = Produk::find($id);

        // Cek apakah produk sudah ada di keranjang pengguna
        $existingItem = Keranjang::where('id_user', Auth::id())
                                ->where('id_produk', $id)
                                ->first();

        if ($existingItem) {
            // Jika sudah ada, tambahkan jumlah
            $existingItem->jumlah += 1;
            $existingItem->harga += $product->harga;
            $existingItem->save();
        } else {
            // Jika belum ada, tambahkan sebagai item baru di keranjang
            Keranjang::create([
                'id_user' => Auth::id(),
                'id_produk' => $id,
                'jumlah' => 1, // default jumlah
                'harga' => $product->harga, // harga produk
            ]);
        }
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
    public function deleteCart($id){
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();
        return redirect()->route('keranjang')->with('success', 'Produk berhasil dihapus dari keranjang');
    }
    public function deleteUnpaid($id){
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect()->route('keranjang')->with('success', 'Produk berhasil dihapus dari keranjang');
    }
    public function buyDetail(Request $request) {
        $validatedData = $request->validate([
            'id_produk' => 'required|exists:produks,id',
            'quantity' => 'required',
        ]);

        $product = Produk::findOrFail($validatedData['id_produk']);
        $quantity = $validatedData['quantity'];

        return view('detailbeli', compact('product', 'quantity'));
    }
    public function saveOrder(Request $request) {
        $validatedData = $request->validate([
            'id_produk' => 'required',
            'nama_pemesan' => 'required',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required',
            'alamat' => 'required|string|max:255',
        ]);

        $product = Produk::findOrFail($validatedData['id_produk']);

        Pesanan::create([
            'id_user' => auth()->id(),
            'id_produk' => $validatedData['id_produk'],
            'nama_pemesan' => $validatedData['nama_pemesan'],
            'jumlah' => $validatedData['jumlah'],
            'harga' => $validatedData['harga'],
            'alamat' => $validatedData['alamat'],
            'status' => 'belum_bayar',
        ]);

        Keranjang::where('id_produk', $validatedData['id_produk'])->delete();

        return redirect()->route('keranjang')->with('success', 'Pesanan berhasil disimpan!');
    }
    public function payProduct($id){
        $pesanan = Pesanan::findOrFail($id);
        return view('bukti', compact('pesanan'));
    }
    public function paidProduct(Request $request, $id) {
        $request->validate([
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:512',
        ]);
        $pesanan = Pesanan::findOrFail($id);
        $file = $request->file('bukti');
        $fileName = 'bukti_' . $id . '_' . $pesanan->nama_pemesan . '.' . $file->extension();
        $file->move(public_path('img/bukti'), $fileName);
        Pesanan::where('id', $id)->update([
            'status' => 'dikemas',
            'bukti' => $fileName,
        ]);

        return redirect()->back()->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }
    public function showStatus($status) {
        $id_user = auth()->id();
        if($status == 'belum_bayar') {
            $pesanan = Pesanan::where('id_user', $id_user)->where('status', 'belum_bayar')->get();
        } elseif($status == 'dikemas') {
            $pesanan = Pesanan::where('id_user', $id_user)->where('status', 'dikemas')->get();
        } elseif($status == 'dikirim') {
            $pesanan = Pesanan::where('id_user', $id_user)->where('status', 'dikirim')->get();
        } else {
            $pesanan = Pesanan::where('id_user', $id_user)->where('status', 'selesai')->get();
        }
        return view('keranjang', compact('pesanan'));
    }
    public function orderComplete($id){
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update([
            'status' => 'selesai',
        ]);

        $produk = Produk::findOrFail($pesanan->id_produk);
        $produk->stok -= $pesanan->jumlah;
        $produk->terjual += $pesanan->jumlah;
        $produk->save();

        return redirect()->back()->with('success', 'Pesanan telah berhasil diselesaikan.');
    }
}
