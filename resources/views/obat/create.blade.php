<!-- resources/views/obat/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Tambah Obat</h2>
    <form method="POST" action="{{ route('obat.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="name">Golongan</label>
            <input type="text" class="form-control" id="golongan" name="golongan" required>
        </div>
        <div class="form-group">
            <label for="name">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="form-group">
            <label for="name">Manfaat</label>
            <input type="text" class="form-control" id="manfaat" name="manfaat" required>
        </div>
        <div class="form-group">
            <label for="name">Bentuk</label>
            <input type="text" class="form-control" id="bentuk" name="bentuk" required>
        </div>
       
      
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
