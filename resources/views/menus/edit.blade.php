<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5 container" style="max-width: 600px;">
    <h3>Edit Menu</h3>
    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Makanan</label>
            <input type="text" name="nama" class="form-control" value="{{ $menu->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-select">
                <option {{ $menu->kategori == 'Makanan Utama' ? 'selected' : '' }}>Makanan Utama</option>
                <option {{ $menu->kategori == 'Lauk' ? 'selected' : '' }}>Lauk</option>
                <option {{ $menu->kategori == 'Sayur' ? 'selected' : '' }}>Sayur</option>
                <option {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Harga (Rp)</label>
            <input type="number" name="harga" class="form-control" value="{{ $menu->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>