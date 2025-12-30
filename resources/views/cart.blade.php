<!DOCTYPE html>
<html lang="id">
<head>
    <title>Keranjang - Warteg Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar { background-color: #ff6600; }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">← Kembali ke Menu</a>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">Keranjang Pesanan</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Menu</th>
                            <th>Harga</th>
                            <th>Jml</th>
                            <th>Subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                <tr>
                                    <td>{{ $details['name'] }}</td>
                                    <td>Rp {{ number_format($details['price']) }}</td>
                                    <td>{{ $details['quantity'] }}</td>
                                    <td>Rp {{ number_format($details['price'] * $details['quantity']) }}</td>
                                    <td>
                                        <a href="{{ route('remove_from_cart', $id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">Keranjang masih kosong</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <h4>Total: Rp {{ number_format($total) }}</h4>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Konfirmasi Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Nama Pemesan</label>
                                <input type="text" name="nama_pemesan" class="form-control" required placeholder="Budi">
                            </div>
                            <div class="mb-3">
                                <label>Nomor Meja</label>
                                <input type="text" name="nomor_meja" class="form-control" required placeholder="05">
                            </div>
                            
                            @if(session('cart'))
                                <button type="submit" class="btn btn-success w-100 fw-bold">PESAN SEKARANG</button>
                            @else
                                <button type="button" class="btn btn-secondary w-100" disabled>Keranjang Kosong</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>