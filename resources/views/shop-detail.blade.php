<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style-nav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style-shop.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style-footer.css') }}" type="text/css">
    <title>Toko Enak</title>
</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    {{-- Navbar --}}
    <x-navbar />
    {{-- End Navbar --}}

    {{-- Card Shop Information --}}
    <div class="container">
        <div class="row align-items-center shop-information">
            <div class="img-profile">
                <img src="{{ asset('assets/img/thumbnail/thumbnail-1.jpg') }}" class="rounded-circle"
                    alt="profile">
            </div>
            <div class="card-body justify-content-between align-items-center">
                <div class="card-title">
                    <h5 class="font-weight-bold">Ayam Geprek Pak Bagus,</h5>
                    <p class="font-weight-bold">Bandung</p>
                </div>
                <div class="row justify-content-between footer-card">
                    <p class="card-text">999+ Melihat</p>
                    <div class="rating d-flex row">
                        <div class="star">
                            <i class="fa fa-star" style="color: yellow"></i>
                            <i class="fa fa-star" style="color: yellow"></i>
                            <i class="fa fa-star" style="color: yellow"></i>
                            <i class="fa fa-star" style="color: yellow"></i>
                        </div>
                        <p class="card-text">4.5/5</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Card Shop Information --}}
    </div>



    {{-- Menu Section --}}
    <div class="menu-section container">
        <div class="title">
            <h3 class="mb-4">Makanan</h3>
        </div>
        @for ($i = 1; $i <= 5; $i++)
            <x-cardmenucomponent />
        @endfor
    </div>
    {{-- Minuman --}}
    <div class="menu-section container mb-5">
        <div class="title">
            <h3 class="mb-4">Minuman</h3>
        </div>
        @for ($i = 1; $i <= 5; $i++)
            <x-cardmenucomponent />
        @endfor
    </div>
    {{-- End Menu Section --}}
    <x-footer/>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
