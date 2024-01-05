<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
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

        .form-container {
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
        button[type="button"] {
            display: block;
            width: 15%;
            padding: 5px;
            margin-top: 10px;
            background-color: #ff6600;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="button"]:hover {
            background-color: #e55900;
        }
        button[type="submit"] {
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

        button[type="submit"]:hover {
            background-color: #e55900;
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
    <!-- Form Register -->
    <div class="form-container" id="register-form">
    <h2>Daftar</h2>
    <form action="#" method="post" id="register-step-1">
        <div class="form-group">
            <label for="register-date">Tanggal:</label>
            <input type="number" id="register-date" name="register-date" min="1" max="31" placeholder="Tanggal" required>
        </div>
        <div class="form-group">
            <label for="register-month">Bulan:</label>
            <input type="number" id="register-month" name="register-month" min="1" max="12" placeholder="Bulan" required>
        </div>
        <div class="form-group">
            <label for="register-year">Tahun:</label>
            <input type="number" id="register-year" name="register-year" min="1900" max="2024" placeholder="Tahun" required>
        </div>
        <button type="submit" onclick="showNextStep()">Berikutnya</button>
        <a href="auth">Sudah memiliki akun?</a>
    </form>

    <form action="#" method="post" id="register-step-2" style="display: none;">
    <button type="button" onclick="showPreviousStep()">Kembali</button>
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
        
        <a href="auth">Sudah memiliki akun?</a>
    </form>
</div>

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
    
    <script>
    function showNextStep() {
        const step1 = document.getElementById("register-step-1");
        const step2 = document.getElementById("register-step-2");
        step1.style.display = "none";
        step2.style.display = "block";
    }

    function showPreviousStep() {
        const step1 = document.getElementById("register-step-1");
        const step2 = document.getElementById("register-step-2");
        step2.style.display = "none";
        step1.style.display = "block";
    }
</script>
</body>
</html>
