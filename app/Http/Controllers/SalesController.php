<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function dashboardDetail(){
        $countProduct = Produk::count();
        $countFinish = Pesanan::where('status', 5)->count();
        $countProgress = Pesanan::count();
        $countStok = Produk::sum('stok');
        $latestOrders = Pesanan::latestOrders();
        return view('admin.dashboard', ['countProduct'=>$countProduct, 'countFinish'=>$countFinish, 'countProgress'=>$countProgress, 'countStok'=>$countStok, 'latestOrders' => $latestOrders]);
    }
    public function showSales(){
        $sales = Pesanan::all();
        return view('admin.sales', ['sales'=>$sales]);
    }
    public function updateStatus(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:dikirim,dikemas', // Validasi status
            'resi' => 'required_if:status,dikirim', // Validasi nomor resi jika status adalah 'dikirim'
        ]);
        $sale = Pesanan::findOrFail($id);
        $sale->status = $request->status;
        if ($request->status == 'dikirim') {
            $sale->resi = $request->resi;
        }
        $sale->save();
        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui.');
    }
}
