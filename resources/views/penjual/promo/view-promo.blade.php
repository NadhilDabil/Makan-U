<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Promo</h2>

        <a href="{{route('view.form.promo')}}" class="btn btn-primary mt-3">Tambah Promo</a>
        @if ($promos->isEmpty())
            <p>Tidak ada promo yang tersedia.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Deskripsi Promo</th>
                        <th scope="col">Jangka Waktu Mulai</th>
                        <th scope="col">Jangka Waktu Berhenti</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promos as $promo)
                        <tr>
                            <td>{{ $promo->Desk_promo }}</td>
                            <td>{{ $promo->jangka_waktu_mulai }}</td>
                            <td>{{ $promo->jangka_waktu_berhenti }}</td>
                            <td>{{ $promo->caption }}</td>
                            <td>
                                <!-- Tombol untuk mengedit promo -->
                                <a href="{{route('view.edit.promo', ['id' => $promo->id_promo])}}" class="btn btn-warning">Edit</a>
                                <form action="{{route('destroy.promo', ['id' => $promo->id_promo])}} " method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus promo ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="btn btn-secondary mt-3">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
