<?php
$title = $title ?? 'Book Appointment';
$error = $error ?? null;
?>
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
            <a href="/appointments/create">Book Appointment</a>
            <a href="/health">Health</a>
            <a href="/login">Login</a>
        </nav>
    </header>
    <main class="container">
        <h1>Book Appointment</h1>
        <p>This form submits to <code>POST /appointments</code>.</p>
        <?php if ($error): ?>
            <div class="alert danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form class="form-card" method="POST" action="/appointments">
            <div class="form-group">
                <label>Patient Name</label>
                <input type="text" name="patient_name" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label>Department</label>
                <input type="text" name="department" placeholder="Cardiology">
            </div>
            <button class="button" type="submit">Save Appointment</button>
            <a class="button secondary" href="/appointments">Back</a>
        </form>
    </main>
</body>
</html>