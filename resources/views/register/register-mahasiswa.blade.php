<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="form-container" id="register-mahasiswa">
            <h2>Registrasi Mahasiswa</h2>
            <form action="{{route('register.submit.mahasiswa')}}" method="POST">
                @csrf
                <label for="username">Nama Lengkap:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="no_telp">No Telphone:</label>
                <input type="text" id="no_telp" name="no_telp" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <button type="submit" class="btn">Register</button>
                <p><a href="{{route('login')}}">Kembali ke Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
