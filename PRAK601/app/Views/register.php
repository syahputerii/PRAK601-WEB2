<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 500px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #007bff;
        }

        .form-label {
            color: #000;
            transition: all 0.3s ease;
            margin-bottom: 5px;
            display: block;
        }

        .form-control:focus ~ .form-label, .form-control:not(:placeholder-shown).form-control:not(:focus) ~ .form-label {
            top: -10px;
            font-size: 12px;
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 15px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 30px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/register') ?>" method="post">
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input id="username" class="form-control" name="username" value="<?= old('username') ?>" required />
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input id="email" class="form-control" name="email" value="<?= old('email') ?>" required />
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required />
            </div>

            <div class="form-group">
                <label class="form-label" for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required />
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>