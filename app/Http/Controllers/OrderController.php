<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    // 1. Fungsi Tambah ke Keranjang (Disimpan di Session Browser dulu)
    public function addToCart($id)
    {
        $menu = Menu::find($id);
        $cart = session()->get('cart', []);

        // Jika menu sudah ada di keranjang, tambah jumlahnya
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Jika belum ada, masukkan data baru
            $cart[$id] = [
                "name" => $menu->nama,
                "quantity" => 1,
                "price" => $menu->harga,
                "photo" => $menu->gambar
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Menu berhasil masuk keranjang!');
    }

    // 2. Fungsi Lihat Halaman Keranjang
    public function cart()
    {
        return view('cart');
    }

    // 3. Fungsi Hapus Item dari Keranjang
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Menu dihapus dari keranjang!');
    }

    // 4. Fungsi Checkout (Simpan ke Database)
    public function checkout(Request $request)
    {
        $cart = session('cart');
        
        if(!$cart) {
            return redirect()->back()->with('error', 'Keranjang kosong!');
        }

        // Hitung Total
        $total = 0;
        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        // Simpan Data Pemesan ke Tabel Orders
        $order = Order::create([
            'nama_pemesan' => $request->nama_pemesan,
            'nomor_meja' => $request->nomor_meja,
            'total_harga' => $total,
        ]);

        // Simpan Detail Makanan ke Tabel OrderItems
        foreach($cart as $id => $details) {
            OrderItem::create([
                'order_id' => $order->id,
                'menu_id' => $id,
                'jumlah' => $details['quantity'],
                'harga' => $details['price'],
            ]);
        }

        // Kosongkan Keranjang
        session()->forget('cart');
        
        return redirect()->route('home')->with('success', 'Pesanan berhasil dibuat! Mohon tunggu.');
    }

    // Halaman Dapur / Admin untuk melihat pesanan masuk
    public function index()
    {
        // Ambil semua order, urutkan dari yang terbaru
        $orders = Order::with('items.menu')->latest()->get();
        return view('dapur', compact('orders'));
    }

    // Fungsi Menghapus Pesanan (Selesai/Batal)
    public function destroyOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete(); // Hapus pesanan (detail menu ikut terhapus otomatis)

        return redirect()->back()->with('success', 'Pesanan berhasil dihapus/diselesaikan!');
    }
}