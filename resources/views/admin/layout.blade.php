<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Tambahkan link CSS Bootstrap atau lainnya -->
</head>
<body>
    <div class="admin-wrapper">
        <header>
            <h1>Admin Panel</h1>
            <!-- Tambahkan navigasi admin -->
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>© 2024 Admin Panel</p>
        </footer>
    </div>
</body>
</html>
