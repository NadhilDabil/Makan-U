<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Toko</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">{{ isset($toko) ? 'Edit Toko' : 'Tambah Toko' }}</h1>
        <form action="{{route('submit.toko')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($toko))
                @method('PUT')
            @endif


            <div class="mb-3">
                <label for="nama_toko" class="form-label">Nama Toko</label>
                <input type="text" name="nama_toko" class="form-control" id="nama_toko" value="{{ old('nama_toko', $toko->nama_toko ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat_toko" class="form-label">Alamat Toko</label>
                <textarea name="alamat_toko" class="form-control" id="alamat_toko" rows="3" required>{{ old('alamat_toko', $toko->alamat_toko ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image_toko" class="form-label">Gambar Toko</label>
                <input type="file" name="image_toko" class="form-control" id="image_toko">
                @if(isset($toko) && $toko->image_toko)
                    <img src="{{ asset('storage/' . $toko->image_toko) }}" alt="Gambar Toko" class="img-thumbnail mt-2" width="200">
                @endif
            </div>

            <div class="mb-3">
                <label for="image_utama" class="form-label">Gambar Utama</label>
                <input type="file" name="image_utama" class="form-control" id="image_utama">
                @if(isset($toko) && $toko->image_utama)
                    <img src="{{ asset('storage/' . $toko->image_utama) }}" alt="Gambar Utama" class="img-thumbnail mt-2" width="200">
                @endif
            </div>

            <div class="mb-3">
                <label for="waktu_operasional_buka" class="form-label">Waktu Operasional Buka</label>
                <input type="time" name="waktu_operasional_buka" class="form-control" id="waktu_operasional_buka" value="{{ old('waktu_operasional_buka', $toko->waktu_operasional_buka ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="waktu_operasional_tutup" class="form-label">Waktu Operasional Tutup</label>
                <input type="time" name="waktu_operasional_tutup" class="form-control" id="waktu_operasional_tutup" value="{{ old('waktu_operasional_tutup', $toko->waktu_operasional_tutup ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="lokasi_toko" class="form-label">Lokasi Toko</label>
                <input type="text" name="lokasi_toko" class="form-control" id="lokasi_toko" value="{{ old('lokasi_toko', $toko->lokasi_toko ?? '') }}" required>
            </div>


            <button type="submit" class="btn btn-primary">{{ isset($toko) ? 'Update' : 'Simpan' }}</button>
        </form>
    </div>
</body>
</html>
