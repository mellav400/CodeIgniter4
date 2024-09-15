<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #ffe6f2; /* Latar belakang pink lembut */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #ff66b2; 
            font-weight: bold;
            text-align: center;
        }
        .form-label {
            color: #ff66b2; 
        }
        .form-control, .form-select {
            border: 2px solid #ff66b2;
            border-radius: 10px;
        }
        .btn-success {
            background-color: #ff66b2;
            border-color: #ff66b2;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .btn-success:hover {
            background-color: #ff99cc;
            border-color: #ff99cc;
        }
        .btn-secondary {
            border-radius: 20px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Tambah Peminjaman</h1>

    <form action="/peminjaman/store" method="post">
        <div class="mb-3">
            <label for="UserID" class="form-label">User</label>
            <select name="UserID" id="UserID" class="form-select">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user['UserID']; ?>"><?= $user['Username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="BukuID" class="form-label">Buku</label>
            <select name="BukuID" id="BukuID" class="form-select">
                <?php foreach ($buku as $item): ?>
                    <option value="<?= $item['id_buku']; ?>"><?= $item['judul']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="TanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="TanggalPeminjaman" id="TanggalPeminjaman" class="form-control">
        </div>

        <div class="mb-3">
            <label for="TanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control">
        </div>

        <div class="mb-3">
            <label for="StatusPeminjaman" class="form-label">Status Peminjaman</label>
            <select name="StatusPeminjaman" id="StatusPeminjaman" class="form-select">
                <option value="masih dipinjam">Masih Dipinjam</option>
                <option value="sudah dikembalikan">Sudah Dikembalikan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/peminjaman" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
