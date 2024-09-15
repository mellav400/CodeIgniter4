<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffe6f2; 
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff0f5; 
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #ff99cc; 
        }
        h1 {
            text-align: center;
            color: #d147a3; 
        }
        .form-label {
            color: #b30086; 
        }
        .form-control, .form-select {
            background-color: #ffe6f2; 
            border: 1px solid #ff99cc;
        }
        .btn-success {
            background-color: #ff66b2;
            border-color: #ff66b2;
        }
        .btn-success:hover {
            background-color: #ff4da6; 
        }
        .btn-secondary {
            background-color: #ff99cc; 
            border-color: #ff99cc;
        }
        .btn-secondary:hover {
            background-color: #ff80bf; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Edit Peminjaman</h1>

    <form action="/peminjaman/update/<?= $peminjaman['PeminjamanID']; ?>" method="post">
        <div class="mb-3">
            <label for="UserID" class="form-label">User</label>
            <select name="UserID" id="UserID" class="form-select">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user['UserID']; ?>" <?= $peminjaman['UserID'] == $user['UserID'] ? 'selected' : '' ?>><?= $user['Username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="BukuID" class="form-label">Buku</label>
            <select name="BukuID" id="BukuID" class="form-select">
                <?php foreach ($buku as $item): ?>
                    <option value="<?= $item['id_buku']; ?>" <?= $peminjaman['BukuID'] == $item['id_buku'] ? 'selected' : '' ?>><?= $item['judul']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="TanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="TanggalPeminjaman" id="TanggalPeminjaman" class="form-control" value="<?= $peminjaman['TanggalPeminjaman']; ?>">
        </div>

        <div class="mb-3">
            <label for="TanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control" value="<?= $peminjaman['TanggalPengembalian']; ?>">
        </div>

        <div class="mb-3">
            <label for="StatusPeminjaman" class="form-label">Status Peminjaman</label>
            <select name="StatusPeminjaman" id="StatusPeminjaman" class="form-select">
                <option value="masih dipinjam" <?= $peminjaman['StatusPeminjaman'] == 'masih dipinjam' ? 'selected' : '' ?>>Masih Dipinjam</option>
                <option value="sudah dikembalikan" <?= $peminjaman['StatusPeminjaman'] == 'sudah dikembalikan' ? 'selected' : '' ?>>Sudah Dikembalikan</option>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="/peminjaman" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
