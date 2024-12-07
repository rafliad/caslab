<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas Pendahuluan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">Informatics Lab</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('tp.index') }}">Set TP</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container mt-5">
        <h1>Edit Tugas Pendahuluan</h1>
        <form action="{{ route('tp.update', $tp->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control"
                    value="{{ $tp->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="sub_judul" class="form-label">Sub Judul</label>
                <input type="text" id="sub_judul" name="sub_judul" class="form-control" value="{{ $tp->sub_judul }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control" value="{{ $tp->kategori }}" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_post" class="form-label">Tanggal Post</label>
                <input type="text" id="tanggal_post" name="tanggal_post" class="form-control" value="{{ $tp->tanggal_post }}" required>
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="text" id="deadline" name="deadline" class="form-control" value="{{ $tp->deadline }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{ $tp->deskripsi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('tp.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>