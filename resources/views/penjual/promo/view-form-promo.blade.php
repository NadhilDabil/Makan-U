<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Promo</h2>
        <form action="{{route('submit.promo')}}" method="POST">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

            <div class="mb-3">
                <label for="Desk_promo" class="form-label">Deskripsi Promo</label>
                <input type="text" name="Desk_promo" id="Desk_promo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jangka_waktu_mulai" class="form-label">Jangka Waktu Mulai</label>
                <input type="date" name="jangka_waktu_mulai" id="jangka_waktu_mulai" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jangka_waktu_berhenti" class="form-label">Jangka Waktu Berhenti</label>
                <input type="date" name="jangka_waktu_berhenti" id="jangka_waktu_berhenti" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="caption" class="form-label">caption</label>
                <input type="text" name="caption" id="caption" class="form-control" rows="3" required></input >
            </div>

            <button type="submit" class="btn btn-primary">Simpan Promo</button>
            <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
