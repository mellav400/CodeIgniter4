<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2; 
        }
        header {
            background-color: #ff66b2; 
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        h1, h4 {
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 600px;
        }
        .form-group label {
            color: #ff66b2; 
        }
        .form-control {
            border: 2px solid #ff66b2; 
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #ff66b2;
            border-color: #ff66b2;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #ff99cc; 
            border-color: #ff99cc;
        }
        .alert {
            background-color: #ffccd5; 
            color: #d9534f;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>Perpustakaan Digital</h1>
            <h4>Tambah Buku</h4>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listerror() ?></div>
                <?php endif; ?>
                <form action="/perpus/saveTambah" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group mb-3">
                        <label for="id_buku">ID Buku</label>
                        <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?= set_value('id_buku')?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul')?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis" id="penulis" value="<?= set_value('penulis')?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= set_value('penerbit')?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= set_value('tahun_terbit')?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah Buku</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
