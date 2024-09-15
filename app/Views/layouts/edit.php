<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #ffe6f2; 
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            max-width: 500px;
            width: 100%;
        }
        .card {
            padding: 20px;
            border-radius: 15px;
            background-color: #fff0f5; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-pink {
            background-color: #ff69b4; 
            border-color: #ff69b4;
            border-radius: 25px;
            padding: 10px 20px;
            color: white;
        }
        .btn-pink:hover {
            background-color: #ff1493; 
            border-color: #ff1493;
        }
        .form-label {
            color: #ff69b4; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <h3 class="text-center mb-4" style="color: #ff69b4;">Edit Buku</h3>
            <form action="/perpus/saveEdit/<?= $buku['id_buku'] ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul', $buku['judul']) ?>" required> 
                </div>
                <div class="form-group">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="penulis" value="<?= set_value('penulis', $buku['penulis']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= set_value('penerbit', $buku['penerbit']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= set_value('tahun_terbit', $buku['tahun_terbit']) ?>" required>
                </div>
                <button type="submit" class="btn btn-pink mt-3 w-100">Edit</button>
            </form> 
        </div>
    </div>
</body>
</html>
