<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($variant)
    {
        // Lakukan logika untuk menentukan rekomendasi berdasarkan varian yang dipilih
        $recommendedPerfume = $this->getRecommendedPerfume($variant);

        // Tampilkan halaman rekomendasi dengan passing data rekomendasi
        return view('result', ['perfume' => $recommendedPerfume]);
    }

    // Contoh logika untuk menentukan rekomendasi
    private function getRecommendedPerfume($variant)
    {
        // Lakukan logika untuk menentukan rekomendasi berdasarkan varian yang dipilih
        // Misalnya, Anda dapat menggunakan database atau file konfigurasi untuk menyimpan data parfum dan melakukan query berdasarkan varian.
        // Di sini, saya hanya memberikan contoh sederhana.

        switch ($variant) {
            case '1':
                return 'Esmeralda';
            case '2':
                return 'Starboy';
            case '3':
                return 'Vanille';
            case '4':
                return 'Euphoria';
            default:
                return 'No recommendation available';
        }
    }
}
