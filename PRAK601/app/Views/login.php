<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-view {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card-view .card-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .card-view form {
            margin-bottom: 0;
        }

        .card-view .form-group {
            margin-bottom: 20px;
        }

        .card-view .form-group label {
            font-weight: bold;
        }

        .card-view .btn-primary {
            width: 100%;
        }

        .card-view .mt-3 {
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="card-view">
            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <h5 class="card-title">Login</h5>
            <form action="<?= base_url('/login') ?>" method="post">
                <div class="form-group">
                    <label for="email">Username/Email address</label>
                    <input type="text" class="form-control" id="email" name="username" value="<?= old('username') ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
                <p class="mt-3">Don't have an account? <a href="<?= base_url('register') ?>">Register here</a>.</p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>