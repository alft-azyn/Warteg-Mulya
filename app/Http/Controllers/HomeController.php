<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Jangan lupa baris ini

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Mulai query
        $query = Menu::query();

        // Jika ada pencarian
        if ($request->has('search')) {
            $query->where('nama', 'LIKE', '%' . $request->search . '%')
                  ->orWhere('kategori', 'LIKE', '%' . $request->search . '%');
        }

        $menus = $query->get();
        
        return view('home', compact('menus'));
    }
}