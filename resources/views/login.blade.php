<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - Warteg Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-4">🔐 Login Admin</h3>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Password Rahasia</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password..." required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
            <a href="{{ route('home') }}" class="btn btn-link w-100 mt-2 text-decoration-none text-secondary">Kembali ke Home</a>
        </form>
    </div>

</body>
</html>