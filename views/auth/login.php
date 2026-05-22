<?php $title = $title ?? 'Login'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header class="topbar">
        <strong>Clinic Router</strong>
        <nav>
            <a href="/">Home</a>
            <a href="/appointments">Appointments</a>
            <a href="/login">Login</a>
        </nav>
    </header>
    <main class="container">
        <h1>Login Demo</h1>
        <form class="form-card" method="POST" action="/login">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="staff@clinic.com">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="******">
            </div>
            <button class="button" type="submit">Login</button>
        </form>
    </main>
</body>
</html>