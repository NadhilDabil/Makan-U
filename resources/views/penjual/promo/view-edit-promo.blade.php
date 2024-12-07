<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Edit Promo</h2>
        <form action="{{ route('update.promo', ['id' => $promo->id_promo]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Desk_promo" class="form-label">Deskripsi Promo</label>
                <input type="text" name="Desk_promo" id="Desk_promo" class="form-control"
                    value="{{ $promo->Desk_promo }}" required>
            </div>

            <div class="mb-3">
                <label for="jangka_waktu_mulai" class="form-label">Jangka Waktu Mulai</label>
                <input type="date" name="jangka_waktu_mulai" id="jangka_waktu_mulai" class="form-control"
                    value="{{ $promo->jangka_waktu_mulai }}" required>
            </div>

            <div class="mb-3">
                <label for="jangka_waktu_berhenti" class="form-label">Jangka Waktu Berhenti</label>
                <input type="date" name="jangka_waktu_berhenti" id="jangka_waktu_berhenti" class="form-control"
                    value="{{ $promo->jangka_waktu_berhenti }}" required>
            </div>

            <div class="mb-3">
                <label for="caption" class="form-label">Caption</label>
                <input type="text" name="caption" id="caption" class="form-control" value="{{ $promo->caption }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Promo</button>
            <a href="javascript:history.back()" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
