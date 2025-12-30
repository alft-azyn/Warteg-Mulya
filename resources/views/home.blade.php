<!DOCTYPE html>
<html lang="id">
<head>
    <title>Warteg Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar { background-color: #ff6600; } /* Warna Oranye Warteg */
        .hero { background: #333; color: white; padding: 50px 0; text-align: center; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">WARTEG MULYA</a>
            
            <div class="ms-auto d-flex align-items-center">
                
                <a href="{{ route('cart') }}" class="btn btn-light text-danger fw-bold shadow-sm me-2">
                    🛒 <span class="badge bg-danger ms-1">{{ count((array) session('cart')) }}</span>
                </a>

                @if(session('sudah_login'))
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown">
                            Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('dapur') }}">Dapur (Pesanan)</a></li>
                            <li><a class="dropdown-item" href="{{ route('menus.index') }}">Kelola Menu</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}">🚪 Logout</a></li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning fw-bold">
                        Login Admin
                    </a>
                @endif

            </div>
        </div>
    </nav>

    <div class="hero">
        <h1>Selamat Datang di Warteg Mulya</h1>
        <p>Makanan Tradisional Indonesia yang Lezat dan Terjangkau</p>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4">Daftar Menu</h2>
        <div class="row">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <form action="{{ route('home') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari Nasi Goreng, Es Teh..." value="{{ request('search') }}">
                        <button class="btn btn-warning" type="submit">Cari</button>
                    </div>
                    </form>
                </div>
            </div>
            @foreach($menus as $menu)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div style="height: 150px; background-color: #ddd; display:flex; align-items:center; justify-content:center;">
                        <span class="text-muted">Foto Menu</span>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->nama }}</h5>
                        <span class="badge bg-warning text-dark">{{ $menu->kategori }}</span>
                        <p class="card-text fw-bold mt-2 text-danger">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                        <a href="{{ route('add_to_cart', $menu->id) }}" class="btn btn-outline-danger w-100">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>