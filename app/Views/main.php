<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="<?= base_url("asset/bootstrap/css/bootstrap.min.css")?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2; /* Warna pink muda untuk latar belakang */
        }
        header {
            background-color: #ff66b2; /* Pink cerah untuk header */
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
            background-color: #ff99cc; /* Pink untuk tombol */
            border-color: #ff66b2;
        }
        .btn-primary:hover {
            background-color: #ff66b2; /* Pink lebih gelap saat hover */
        }
        table {
            background-color: white;
        }
        table th {
            background-color: #ffccdd; /* Pink lebih lembut untuk header tabel */
        }
        .btn-danger {
            background-color: #ff4d88; /* Pink gelap untuk tombol hapus */
        }
        .btn-danger:hover {
            background-color: #ff0066; /* Lebih gelap saat hover */
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
            <h1 class="text-center">Perpustakaan Digital</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/perpus/tambah" class="btn btn-primary mb-3 mt-5">Tambah Data Buku</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Id Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($buku as $perpus): ?>
                            <tr>
                                <td><?= $no?></td>
                                <td><?= $perpus['id_buku']?></td>
                                <td><?= $perpus['judul']?></td>
                                <td><?= $perpus['penulis']?></td>
                                <td><?= $perpus['penerbit']?></td>
                                <td><?= $perpus['tahun_terbit']?></td>
                                <td>
                                    <form action="perpus/edit" method="post">
                                        <input type="hidden" name="id_buku" value="<?= $perpus['id_buku']?>">
                                        <button type="submit" class="btn pink  waves-effect waves-light"><i class="material-icons">edit</i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="perpus/hapus" method="post">
                                        <input type="hidden" name="id_buku" value="<?= $perpus['id_buku']?>">
                                        <button type="submit" class="btn red lighten-2 waves-effect waves-light"><i class="material-icons">delete</i></button>
                                    </form> 
                                </td>
                            </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
