<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar TP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min
.css">
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
        <h1>Daftar Tugas pendahuluan</h1>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('tp.create') }}" class="btn btn-primary mb3">Tambah TP</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Sub Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal Post</th>
                    <th>Deadline</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tp as $tugas)
                    <tr>
                        <td>{{ $tugas->id }}</td>
                        <td>{{ $tugas->judul }}</td>
                        <td>{{ $tugas->sub_judul }}</td>
                        <td>{{ $tugas->kategori }}</td>
                        <td>{{ $tugas->tanggal_post }}</td>
                        <td>{{ $tugas->deadline }}</td>
                        <td>{{ $tugas->deskripsi }}</td>
                        <td>
                            <a href="{{ route('tp.edit', $tugas->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tp.destroy', $tugas->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>