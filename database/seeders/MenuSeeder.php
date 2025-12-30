<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Data sesuai PDF Tugas Anda
        $menus = [
            ['nama' => 'Nasi Goreng', 'kategori' => 'Makanan Utama', 'harga' => 15000],
            ['nama' => 'Ayam Goreng', 'kategori' => 'Lauk', 'harga' => 20000],
            ['nama' => 'Ikan Bakar', 'kategori' => 'Lauk', 'harga' => 25000],
            ['nama' => 'Sayur Asem', 'kategori' => 'Sayur', 'harga' => 8000],
            ['nama' => 'Gado-gado', 'kategori' => 'Sayur', 'harga' => 12000],
            ['nama' => 'Soto Betawi', 'kategori' => 'Makanan Utama', 'harga' => 18000],
            ['nama' => 'Es Teh Manis', 'kategori' => 'Minuman', 'harga' => 5000],
            ['nama' => 'Es Jeruk', 'kategori' => 'Minuman', 'harga' => 6000],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}