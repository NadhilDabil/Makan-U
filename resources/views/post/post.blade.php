<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Management</title>
    <!-- Tambahkan CDN Bootstrap untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="text-center mb-4">Post Management</h1>

        <!-- Tombol Tambah Post -->
        <div class="text-end mb-4">
            <a href="{{ route('post.create') }}" class="btn btn-primary">Tambah Post</a>
        </div>

        <!-- Card untuk setiap post -->
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <!-- Gambar -->
                    <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">

                    <!-- Caption -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <div class="d-flex justify-content-between">
                            <!-- Tombol Edit -->
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus post ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Tambahkan CDN Bootstrap JS untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
