<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* BACKGROUND PREMIUM */
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, #2563eb, #9333ea);
            background-size: 400% 400%;
            animation: bgMove 15s infinite alternate ease-in-out;
        }

        @keyframes bgMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* LOGIN CARD */
        .login-card {
            width: 100%;
            max-width: 380px;
            padding: 40px;
            border-radius: 25px;
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.13);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            animation: fadeIn 0.7s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* LOGO */
        .logo {
            width: 85px;
            display: block;
            margin: 0 auto 10px auto;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
            100% { transform: translateY(0px); }
        }

        h2 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* FORM FIELD */
        .form-group {
            margin-bottom: 18px;
        }

        label {
            color: #f3f3f3;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        input {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            background: rgba(255,255,255,0.25);
            color: white;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input:focus {
            background: rgba(255,255,255,0.35);
            box-shadow: 0 0 8px rgba(255,255,255,0.5);
        }

        /* BUTTON */
        button {
            width: 100%;
            padding: 12px;
            border: none;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #60a5fa, #a78bfa);
            box-shadow: 0px 8px 25px rgba(255,255,255,0.4);
            transform: translateY(-2px);
        }

        /* ERROR MESSAGE */
        .alert {
            background: rgba(255,0,0,0.25);
            border-left: 5px solid #ff4d4d;
            padding: 12px;
            border-radius: 10px;
            color: rgb(255, 230, 230);
            font-size: 14px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slide 0.45s ease;
        }

        @keyframes slide {
            from { opacity: 0; transform: translateY(-12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .alert-icon {
            font-size: 20px;
        }

        /* MOBILE RESPONSIVE */
        @media (max-width: 480px) {
            .login-card {
                padding: 30px;
                border-radius: 20px;
            }
            .logo {
                width: 70px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        <img src="/assets/images/logo.png" class="logo" alt="Logo">

        <h2>LOGIN ADMIN</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert">
                <span class="alert-icon">⚠️</span>
                <span><?= session()->getFlashdata('error') ?></span>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= base_url('admin/login/process') ?>">
            <?= csrf_field() ?>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan username..." required autofocus>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password..." required>
            </div>

            <button type="submit">Masuk</button>
        </form>

    </div>

</body>

</html>
