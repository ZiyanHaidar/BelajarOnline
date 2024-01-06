<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Belajar Online</title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS Anda di sini */
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

        header {
            background-color: #f9f9f9;
            color: #333333;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            /* Menjadikan header sebagai flex container */
            justify-content: flex-start;
            /* Menjadikan konten header berada di kiri */
            align-items: center;
            /* Memusatkan vertikal konten header */
        }

        h1 {
            margin: 0;
            font-size: 2em;
            display: inline-block;
            /* Menjadikan teks h1 menjadi inline block */
        }

        h1 a {
            color: #888888;
            text-decoration: none;
        }

        h1 a:hover {
            color: #333333;
        }

        /* Hilangkan hero */
        .hero {
            display: none;
        }

        /* Isi CSS Anda di sini */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        footer {
            margin-top: 100px;
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

        .form-container {
            margin: 0 auto;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .password-toggle {
            position: absolute;
            top: 70%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }


        button[type="submit"] {
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

        button[type="submit"]:hover {
            background-color: #333333;
        }

        a {
            display: block;
            text-align: center;
            color: orange;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1><a href="<?php echo base_url('home'); ?>">Belajar Online</a></h1>
            <!-- Tombol login/register di header -->
            <div class="login-register">
                <button onclick="location.href='<?php echo base_url('auth'); ?>';">Masuk</button>
                <button onclick="location.href='<?php echo base_url('auth/register'); ?>';">Daftar</button>
            </div>
        </div>
    </header>

    <div class="form-container" id="register-form">
        <h2>Daftar</h2>

        <form action="#" method="post">
            <br>
            <div class="form-group">
                <label for="register-username">Username:</label>
                <input type="text" id="register-username" name="register-username" required>
            </div>
            <div class="form-group">
                <label for="register-email">Email:</label>
                <input type="email" id="register-email" name="register-email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password:</label>
                <input type="password" id="register-password" name="register-password" required>
                <i class="password-toggle fas fa-eye-slash" onclick="toggleRegisterPassword()"></i>
            </div>
            <button type="submit">Daftar</button>

            <a href="<?php echo base_url('auth'); ?>">Sudah memiliki akun?</a>
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

    <script>
        function toggleRegisterPassword() {
            const passwordField = document.getElementById("register-password");
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