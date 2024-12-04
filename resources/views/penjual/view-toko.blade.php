<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Toko</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
        }
        .toko-image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .info {
            margin: 10px 0;
        }
        .info strong {
            display: inline-block;
            width: 150px;
        }
        .btn-back,
        .btn-edit,
        .btn-delete {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 15px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
        }
        .btn-back:hover,
        .btn-edit:hover,
        .btn-delete:hover {
            background-color: #0056b3;
        }
        .btn-edit {
            background-color: #28a745;
        }
        .btn-delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Detail Toko</h1>
        @if($toko)
            @if($toko->image_toko)
                <img src="{{ asset('storage/' . $toko->image_toko) }}" alt="Gambar Toko" class="toko-image">
            @endif
            <div class="info">
                <strong>Nama Toko:</strong> {{ $toko->nama_toko }}
            </div>
            <div class="info">
                <strong>Alamat:</strong> {{ $toko->alamat_toko }}
            </div>
            <div class="info">
                <strong>Waktu Operasional:</strong>
                {{ $toko->waktu_operasional_buka }} - {{ $toko->waktu_operasional_tutup }}
            </div>
            <div class="info">
                <strong>Lokasi:</strong> {{ $toko->lokasi_toko }}
            </div>
            @if($toko->image_utama)
                <div class="info">
                    <strong>Gambar Utama:</strong> <br>
                    <img src="{{ asset('storage/' . $toko->image_utama) }}" alt="Gambar Utama" class="toko-image">
                </div>
            @endif
            <!-- Tombol Edit -->
            <a href="{{route('view.edit.toko')}}" class="btn-edit">Edit Toko</a>

            <!-- Form untuk Tombol Delete -->
            <form action="{{route('destroy.toko', $toko->id_toko) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">Delete Toko</button>
            </form>
        @else
            <p>Toko tidak ditemukan atau Anda belum memiliki toko.</p>
        @endif
        <a href="/" class="btn-back">Kembali ke Beranda</a>
    </div>
</body>
</html>
