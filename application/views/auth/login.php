<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Belajar Online</title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        header {
            color: #333333;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: #f9f9f9;
            /* Warna latar belakang header */
        }

        header h1 {
            font-size: 2em;
        }

        .login-register {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .login-register button {
            padding: 8px 16px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            background-color: #333333;
            transition: background-color 0.3s ease;
        }

        .login-register button:hover {
            background-color: #555555;
        }

        h1 {
            margin: 0;
            font-size: 2em;
            display: inline-block;
        }

        h1 a {
            color: #888888;
            text-decoration: none;
        }

        h1 a:hover {
            color: #333333;
        }

        .hero {
            display: none;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        footer {
            margin-top: 149px;
            background-color: #333333;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }

        footer nav ul li {
            display: inline;
            margin-right: 10px;
        }

        footer nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        #login-form {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        #login-form .form-group {
            margin-bottom: 15px;
        }

        #login-form .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        #login-form .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #login-form button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #login-form button[type="submit"]:hover {
            background-color: #333333;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        a {
            display: block;
            text-align: center;
            color: orange;
            margin-top: 10px;
            text-decoration: none;
        }

        @media only screen and (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: center;
            }

            .login-register {
                position: relative;
                margin-top: 20px;
                text-align: center;
            }
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
            }

            .login-register button {
                margin-left: 0;
                margin-top: 10px;
            }

            #login-form {
                max-width: 100%;
            }

            #login-form .form-group input {
                font-size: 14px;
                padding: 10px;
            }

            header {
                background-color: #f9f9f9;
                text-align: center;
                width: 100%;
            }

            .login-register button {
                margin-left: 5px;
            }

            #login-form {
                margin-top: 20px;
            }

            .login-register {
                position: relative;
                margin-top: 20px;
                text-align: center;
            }

            header {
                padding: 15px 0;
            }

            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                margin: 0;
            }

            container {
                flex: 1;
            }

            footer {
                margin-top: auto;
            }

            footer {
                padding: 10px 0;
            }

            footer {
                background-color: #333333;
                text-align: center;
                padding: 20px 0;
                width: 100%;
            }

            #login-form {
                max-width: 250px;
                margin: 0 auto;
                padding: 10px;
            }

            #login-form h2 {
                font-size: 1.2em;
                margin-bottom: 5px;
            }

            #login-form .form-group {
                margin-bottom: 8px;
            }

            #login-form .form-group label {
                font-size: 12px;
            }

            #login-form .form-group input {
                font-size: 12px;
                padding: 5px;
            }

            #login-form button[type="submit"] {
                padding: 12px;
            }

            .login-register button {
                padding: 8px;
            }

            .password-toggle {
                top: 50%;
            }
        }

        #login-form .password-input-container {
            position: relative;
        }

        #login-form .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1><a href="home">Belajar Online</a></h1>
            <!-- Tambahkan tombol login dan register di kanan atas -->
            <div class="login-register">
                <button onclick="location.href='<?php echo base_url('auth'); ?>';">Masuk</button>
                <button onclick="location.href='<?php echo base_url('auth/register'); ?>';">Daftar</button>
            </div>
        </div>
    </header>

    <!-- Formulir Login -->
    <div class="container">
        <form action="<?php echo base_url('auth/aksi_login'); ?>" method="post" id="login-form">
            <h2>Masuk</h2>
            <div class="form-group">
                <label for="login-email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <div class="password-input-container">
                    <input type="password" id="password" name="password" minlength="8" required>
                    <i class="password-toggle fas fa-eye-slash" onclick="togglePassword()"></i>
                </div>
            </div>
            <small style="color:red">*Password minimal 8 karakter*</small>
            <button type="submit">Masuk</button>
            <a href="<?php echo base_url('auth/register'); ?>">Buat Akun</a>
    </div>
  
    </form>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Belajar Online</p>
        </div>
    </footer>

    <!-- Tambahkan Font Awesome CDN untuk ikon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("login-password");
            const toggleIcon = document.querySelector(".password-toggle");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>

</html>