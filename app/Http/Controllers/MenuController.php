<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // 1. Tampilkan Daftar Menu (Mode Admin)
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    // 2. Tampilkan Form Tambah
    public function create()
    {
        return view('menus.create');
    }

    // 3. Simpan Data ke Database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
        ]);

        Menu::create($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    // 4. Tampilkan Form Edit
    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    // 5. Update Data di Database
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $menu->update($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu berhasil diupdate!');
    }

    // 6. Hapus Menu
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus!');
    }
}