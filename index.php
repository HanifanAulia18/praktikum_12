<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Inventory | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />

    <!-- AdminLTE -->
    <link rel="stylesheet"
        href="AdminLTE-4.0.0-rc7/dist/css/adminlte.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <!-- COMPANY -->
        <div class="company">

            <div class="logo">
                <img src="logo.jpeg" alt="Logo">
            </div>

            <h1>INDAH KIAT PULP & PAPER</h1>
            <p>LOGIN</p>

        </div>

        <!-- FORM -->
        <div class="form-box">

            <form action="proses_register.php" method="post" class="form active">

                <h2>Register</h2>

                <!-- Nama Lengkap -->
                <input type="text"
                    class="form-control"
                    name="nama_lengkap"
                    placeholder="Masukkan Nama Lengkap"
                    required />

                <!-- Username -->
                <input type="text"
                    class="form-control"
                    name="username"
                    placeholder="Masukkan Username"
                    required />

                <!-- Role -->
                <select class="form-control"
                    name="role"
                    required
                    style="padding:14px;
                           margin-bottom:15px;
                           border:1px solid #ccc;
                           border-radius:10px;
                           font-size:15px;">

                    <option value="">
                        -- Pilih Role --
                    </option>

                    <option value="admin">
                        Admin
                    </option>

                    <option value="pengguna">
                        Pengguna
                    </option>

                </select>

                <!-- Password -->
                <input type="password"
                    class="form-control"
                    name="password"
                    placeholder="Masukkan Password"
                    required />

                <!-- Confirm Password -->
                <input type="password"
                    class="form-control"
                    name="confirm_password"
                    placeholder="Konfirmasi Password"
                    required />

                <!-- BUTTON -->
                <button type="submit"
                    class="submit-btn">
                    Register
                </button>

                <!-- LOGIN -->
                <div class="switch-text">
                    Sudah punya akun?
                    <span>
                        <a href="login.php"
                            style="color:#1e3a8a;
                                   text-decoration:none;
                                   font-weight:bold;">
                            Login
                        </a>
                    </span>
                </div>

            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>