<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dapur Warteg Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>👨‍🍳 Dapur - Daftar Pesanan Masuk</h2>
            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Menu</a>
        </div>

        @foreach($orders as $order)
        <div class="card mb-3 shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <div>
                    <strong>Pemesan: {{ $order->nama_pemesan }}</strong> (Meja: {{ $order->nomor_meja }})
                    <br>
                    <small class="text-muted">{{ $order->created_at->format('d M Y, H:i') }}</small>
                </div>
                
                <form action="{{ route('dapur.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Pesanan ini sudah selesai dan mau dihapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        ✅ Selesai
                    </button>
                </form>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach($order->items as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item->menu->nama }} (x{{ $item->jumlah }})
                        <span>Rp {{ number_format($item->harga * $item->jumlah) }}</span>
                    </li>
                    @endforeach
                </ul>
                <div class="mt-3 text-end">
                    <h5>Total: Rp {{ number_format($order->total_harga) }}</h5>
                </div>
            </div>
        </div>
        @endforeach

        @if($orders->isEmpty())
            <div class="alert alert-info text-center">Belum ada pesanan masuk hari ini.</div>
        @endif
    </div>

</body>
</html>