<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    <link rel="stylesheet" href="<?= base_url("asset/bootstrap/css/bootstrap.min.css")?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;  
        }
        header {
            background-color: #ff66b2; 
            color: white;
            position: relative;
        }
        .icon-container {
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .icon-container a {
            color: white;
            margin-right: 15px;
            font-size: 30px;
        }
        .btn-primary {
            background-color: #ff99cc; 
            border-color: #ff66b2;
        }
        .btn-primary:hover {
            background-color: #ff66b2;
        }
        table {
            background-color: white;
        }
        table th {
            background-color: #ffccdd; 
        }
        .btn-warning {
            background-color: #ffcc66; 
        }
        .btn-danger {
            background-color: #ff4d88;
        }
        .btn-danger:hover {
            background-color: #ff0066;
        }
    </style>
</head>
<body>
    <header class="text-white py-3">
        <div class="container">
            <div class="icon-container">
                <a href="/peminjaman" title="Peminjaman"><i class="material-icons">book</i></a>
                <a href="/perpus" title="Buku"><i class="material-icons">library_books</i></a>
                <a href="/datauser" title="User"><i class="material-icons">person</i></a>
            </div>
            <h1 class="text-center">Daftar Peminjaman</h1>
        </div>
    </header>

    <div class="container mt-5">
        <a href="/peminjaman/create" class="btn btn-primary mb-3">Tambah Peminjaman</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Buku ID</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Peminjaman</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjaman as $item): ?>
                <tr>
                    <td><?= $item['PeminjamanID']; ?></td>
                    <td><?= $item['UserID'];?></td>
                    <td><?= $item['BukuID'];?></td>
                    <td><?= $item['TanggalPeminjaman']; ?></td>
                    <td><?= $item['TanggalPengembalian']; ?></td>
                    <td><?= $item['StatusPeminjaman']; ?></td>
                    <td>
                        <a href="/peminjaman/edit/<?= $item['PeminjamanID']; ?>" class="btn pink waves-effect waves-light"><i class="material-icons">edit</i></a>
                        <a href="/peminjaman/delete/<?= $item['PeminjamanID']; ?>" class="btn red lighten-2 waves-effect waves-light" onclick="return confirm('Apakah Anda yakin?')"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
