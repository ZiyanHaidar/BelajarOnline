<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        #register-form {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #register-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        #register-form .form-group {
            margin-bottom: 15px;
        }

        #register-form .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        #register-form .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #register-form button[type="submit"] {
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

        #register-form button[type="submit"]:hover {
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

            #register-form {
                max-width: 100%;
            }

            #register-form .form-group input {
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

            #register-form {
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

            #register-form {
                max-width: 250px;
                margin: 0 auto;
                padding: 10px;
            }

            #register-form h2 {
                font-size: 1.2em;
                margin-bottom: 5px;
            }

            #register-form .form-group {
                margin-bottom: 8px;
            }

            #register-form .form-group label {
                font-size: 12px;
            }

            #register-form .form-group input {
                font-size: 12px;
                padding: 5px;
            }

            #register-form button[type="submit"] {
                padding: 12px;
            }

            .login-register button {
                padding: 8px;
            }

            .password-toggle {
                top: 50%;
            }
        }

        #register-form .password-input-container {
            position: relative;
        }

        #register-form .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .gender-selection {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .gender-option {
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid transparent; /* Add this line for initial border */
        }

        .gender-option.selected {
            border-color: #4CAF50; /* Add this line for the selected border color */
        }

    .blue {
        background-color: #3498db; /* Blue color */
        color: #ffffff;
    }

    .pink {
        background-color: #e91e63; /* Pink color */
        color: #ffffff;
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

        <form action="<?php echo base_url('auth/aksi_register'); ?>" method="post" onsubmit="return validateForm()">
            <br>
            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fullname">Nama Lengkap:</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
    <label for="password">Password:</label>
    <div class="password-input-container">
        <input type="password" id="password" name="password" minlength="8" required>
        <i class="password-toggle fas fa-eye-slash" onclick="toggleRegisterPassword()"></i>
    </div>
</div>
<small style="color:red">*Password minimal 8 karakter*</small>

<!-- Gender selection with colored icons and boxes -->
<div class="form-group" >
        <!-- Remove the label for gender -->
        <div class="gender-selection">
            <div class="gender-option blue" onclick="selectGender('Laki-laki', this)">
                <i class="fas fa-male"></i>
            </div>
            <div class="gender-option pink" onclick="selectGender('Perempuan', this)">
                <i class="fas fa-female"></i>
            </div>
            <input type="hidden" name="gender" id="gender-input" required>
        </div>
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
    function validateForm() {
        // Check if gender is selected
        const selectedGender = document.getElementById('gender-input').value;

        if (!selectedGender) {
            // Gender not selected, show an error message
            Swal.fire({
                title: 'Error',
                text: 'Please select your gender.',
                icon: 'error',
                showConfirmButton: true
            });

            // Prevent form submission
            return false;
        }

        // Continue with form submission
        return true;
    }

    function selectGender(gender, element) {
        // Remove the "selected" class from all gender options
        const allGenderOptions = document.querySelectorAll('.gender-option');
        allGenderOptions.forEach(option => option.classList.remove('selected'));

        // Add the "selected" class to the clicked gender option
        element.classList.add('selected');

        // Update the hidden input field with the selected gender
        document.getElementById('gender-input').value = gender;
    }
</script>
    <script>
        function toggleRegisterPassword() {
            const passwordField = document.getElementById("password");
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if($this->session->flashdata('register_gagal')){ ?>
        <script>
        Swal.fire({
            title: 'Daftar Gagal',
            text: '<?php echo $this->session->flashdata('register_gagal'); ?>',
            icon: 'error',
            showConfirmButton: false,
            timer: 1500
        });
        </script>
        <?php } ?>

        <?php if($this->session->flashdata('error')){ ?>
        <script>
        Swal.fire({
            title: 'Daftar Gagal',
            text: '<?php echo $this->session->flashdata('error'); ?>',
            icon: 'error',
            showConfirmButton: false,
            timer: 1500
        });
        </script>
        <?php } ?>
        <?php if ($this->session->flashdata('success')) { ?>
        <script>
            Swal.fire({
                title: 'Daftar Berhasil',
                text: '<?php echo $this->session->flashdata('success'); ?>',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php } ?>
</body>

</html>