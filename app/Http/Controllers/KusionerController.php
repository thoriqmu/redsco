<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class KusionerController extends Controller
{
    // Method untuk menangani permintaan rekomendasi
    public function recommend(Request $request) {
        // Lakukan logika rekomendasi berdasarkan pilihan pengguna
        $answers = $request->input('answers');

        // Misalnya, Anda bisa menggunakan algoritma atau logika bisnis Anda sendiri di sini
        // Di sini, kita asumsikan bahwa kita hanya mengembalikan varian parfum pertama dari pilihan pengguna
        $recommendedVariant = $answers[0];

        // Ambil data produk dari database berdasarkan varian yang direkomendasikan
        $product = Produk::where('varian', $recommendedVariant)->first();

        // Redirect ke halaman detail produk rekomendasi dengan mengembalikan id produk
        return redirect()->route('recommendation.show', ['id' => $product->id]);
    }

    // Method untuk menampilkan detail produk rekomendasi
    public function showRecommendation($id) {
        // Ambil data produk dari database berdasarkan id yang direkomendasikan
        $product = Produk::findOrFail($id);

        // Tampilkan halaman detail produk rekomendasi
        return view('result', ['product' => $product]);
    }

}
