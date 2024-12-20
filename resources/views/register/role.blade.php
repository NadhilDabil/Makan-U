<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style-login.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <title>Login</title>
</head>

<body>
    <div class="layer">
        <div class="content__section d-flex justify-content-center align-items-center min-vh-100">
            <div class="login shadow-sm  bg-white">
                <div class="title__text text-center">
                    <h2>Masuk Sebagai</h2>
                </div>
                <div class="choose__role">
                    <button class="btn btn-warning choose__btn" onclick="window.location='{{ route('view.register.mahasiswa') }}'">Mahasiswa</button>
                    <button class="btn btn-primary choose__btn" onclick="window.location='{{ route('view.register.penjual') }}'">Penjual</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
