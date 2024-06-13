<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .card-form {
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row justify-content-center"> 
            <div class="col-12">
                <center><h2 class="mb-4">Tambah Data Buku</h2></center>
            </div>

            <div class="col-6">
                <div class="card card-form mx-auto"> <!-- Card view dan posisinya di tengah halaman -->
                    <div class="card-body">
                        <form action="<?= base_url('/buku/create') ?>" method="post" onsubmit="return validateForm()">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                                <small id="judulError" class="text-danger"></small>
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis">
                                <small id="penulisError" class="text-danger"></small>
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit">
                                <small id="penerbitError" class="text-danger"></small>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                                <small id="tahun_terbitError" class="text-danger"></small>
                            </div>

                            <button type="submit" class="btn btn-primary">TAMBAH</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function validateForm() {
            var judul = document.getElementById("judul").value;
            var penulis = document.getElementById("penulis").value;
            var penerbit = document.getElementById("penerbit").value;
            var tahun_terbit = document.getElementById("tahun_terbit").value;

            var judulError = document.getElementById("judulError");
            var penulisError = document.getElementById("penulisError");
            var penerbitError = document.getElementById("penerbitError");
            var tahun_terbitError = document.getElementById("tahun_terbitError");

            var valid = true;

            if (judul === "") {
                judulError.innerText = "Judul harus diisi";
                valid = false;
            } else {
                judulError.innerText = "";
            }

            if (penulis === "") {
                penulisError.innerText = "Penulis harus diisi";
                valid = false;
            } else {
                penulisError.innerText = "";
            }

            if (penerbit === "") {
                penerbitError.innerText = "Penerbit harus diisi";
                valid = false;
            } else {
                penerbitError.innerText = "";
            }

            if (tahun_terbit === "") {
                tahun_terbitError.innerText = "Tahun terbit harus diisi";
                valid = false;
            } else if (isNaN(tahun_terbit) || tahun_terbit < 1800 || tahun_terbit > 2024) {
                tahun_terbitError.innerText = "Tahun terbit harus berupa angka antara 1800 dan 2024";
                valid = false;
            } else {
                tahun_terbitError.innerText = "";
            }

            return valid;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>