<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f3f4f6; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .login-container { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { margin-bottom: 20px; color: #1f2937; text-align: center; }
        .error { background: #fee2e2; color: #dc2626; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-size: 14px; }
        label { display: block; margin-bottom: 5px; color: #374151; font-weight: 500; }
        input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #d1d5db; border-radius: 5px; font-size: 14px; }
        button { width: 100%; padding: 12px; background: #3b82f6; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; font-weight: 500; }
        button:hover { background: #2563eb; }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Admin</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="error"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('admin/login/process') ?>">
        <?= csrf_field() ?>
        
        <label>Username</label>
        <input type="text" name="username" required autofocus>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>