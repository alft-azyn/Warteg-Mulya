<!DOCTYPE html>
<html>
<head>
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5 container" style="max-width: 600px;">
    <h3>Tambah Menu Baru</h3>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Makanan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-select">
                <option>Makanan Utama</option>
                <option>Lauk</option>
                <option>Sayur</option>
                <option>Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Harga (Rp)</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>