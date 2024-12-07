<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Input untuk gambar -->
    <input type="file" name="image" accept="image/*" required>

    <!-- Input untuk caption -->
    <textarea name="caption" placeholder="Masukkan caption" required></textarea>

    <button type="submit">Simpan</button>
</form>

