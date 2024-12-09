<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="form-container" id="login-form">
            <h2>Login</h2>
            <form action="{{route('login.submit')}}" method="POST">
                @csrf
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">Login</button>
                <p>Belum punya akun? <a href="{{route('view.register.mahasiswa')}}">Daftar sebagai Mahasiswa</a> atau
                <a href="{{route('view.register.penjual')}}">Daftar sebagai Penjual</a></p>
            </form>
        </div>
    </div>
</body>
</html>
