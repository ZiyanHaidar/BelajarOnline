<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login-form {
            max-width: 400px;
            width: 100%;
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
            background-color: #ff6600;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #login-form button[type="submit"]:hover {
            background-color: #e55900;
        }
        .password-toggle {
            position: absolute;
            top: 70%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .form-group {
            position: relative;
        }
    </style>
</head>
<body>
    <!-- Form Login -->
    <div class="form-container" id="login-form">
        <h2>Masuk</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="login-username">Username:</label>
                <input type="text" id="login-username" name="login-username" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="login-password" required>
                <i class="password-toggle fas fa-eye-slash" onclick="togglePassword()"></i>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>

    <!-- Tambahkan Font Awesome CDN untuk ikon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

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
