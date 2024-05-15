<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function showProduct(){
        $product = Produk::all();
        return view('admin.product', ['product' => $product]);
    }

    public function addProduct(Request $request){
        $request->validate([
            'varian' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'deskripsi' => 'string',
            'gambar' => 'required|image|max:2048',
            'tipe' => 'required|array',
        ]);

        $tipe = $request->input('tipe');
        $tipeString = implode(', ', $tipe);

        $imageName = 'varian_' . Produk::max('id') + 1 . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/produk'), $imageName);

        Produk::create([
            'varian' => $request->input('varian'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'terjual' => 0,
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $imageName,
            'tipe' => $tipeString,
        ]);

        Session::flash('success', 'Produk berhasil ditambahkan.');

        return redirect()->back();
    }
    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'varian' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'deskripsi' => 'string',
            'gambar' => 'image|max:2048',
        ]);

        $product = Produk::findOrFail($id);

        $tipe = $request->input('tipe');
        $tipeString = implode(', ', $tipe);

        $product->varian = $request->input('varian');
        $product->harga = $request->input('harga');
        $product->stok = $request->input('stok');
        $product->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('gambar')) {
            $imageName = 'varian_' . $id . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('img/produk'), $imageName);
            $product->gambar = $imageName;
        }

        $product->tipe = $tipeString;

        $product->save();

        Session::flash('success', 'Produk berhasil diperbarui.');

        return redirect()->back();
    }

    public function shopProduct() {
        $product = Produk::all();
        return view('shop', ['product' => $product]);
    }

    public function productDetail($id) {
        $product = Produk::findOrFail($id);
        return view('deskrip', ['product' => $product]);
    }
}
