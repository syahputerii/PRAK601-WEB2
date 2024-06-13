<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-logout {
            margin-top: 20px;
            float: right;
        }

        .btn-info {
            margin-bottom: 10px;
        }

        .card {
            margin-top: 20px;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-body {
            padding: 20px;
        }

        .table {
            margin-top: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang di Perpustakaan Gemilang</h1>
                <p>Selamat datang di halaman utama Perpustakaan! Temukan beragam Buku terkini</p>
            </div>
            <div class="col">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-logout">LOGOUT</a>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col">
                <h2>Daftar Buku</h2>
                <a class="btn btn-info" href="<?= base_url('/buku/create') ?>">TAMBAH DATA</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php foreach($buku as $key => $value): ?>
                <div class="card">
                    <div class="card-header" style="font-family: Arial; font-size: 20px;">
                        <center><?= $value['judul'] ?></center>
                    </div>
                    <div class="card-body">
                        <p><strong>Penulis:</strong> <?= $value['penulis'] ?></p>
                        <p><strong>Penerbit:</strong> <?= $value['penerbit'] ?></p>
                        <p><strong>Tahun Terbit:</strong> <?= $value['tahun_terbit'] ?></p>
                        <div class="d-flex justify-content-end">
                            <!-- hapus button -->
                            <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>" class="btn btn-warning btn-sm">EDIT</a>
                            <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">HAPUS</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>