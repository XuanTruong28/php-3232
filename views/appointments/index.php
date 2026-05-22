<?php
$title = $title ?? 'Appointments';
$appointments = $appointments ?? [];
$created = $created ?? false;

function statusClass(string $status): string {
    return match ($status) {
        'Confirmed' => 'success',
        'Pending' => 'warning',
        'Cancelled' => 'danger',
        default => 'secondary'
    };
}
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
        <?php if ($created): ?>
            <div class="alert success">Appointment booked successfully. Redirect response worked.</div>
        <?php endif; ?>
        <div class="page-header">
            <div>
                <h1>Appointment List</h1>
                <p>This page is handled by AppointmentController@index.</p>
            </div>
            <a class="button" href="/appointments/create">Book Appointment</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Patient Name</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $apt): ?>
                    <tr>
                        <td><?= htmlspecialchars($apt['code']) ?></td>
                        <td><?= htmlspecialchars($apt['patient_name']) ?></td>
                        <td><?= htmlspecialchars($apt['department']) ?></td>
                        <td><?= htmlspecialchars($apt['doctor']) ?></td>
                        <td><?= htmlspecialchars($apt['date']) ?></td>
                        <td><span class="badge <?= statusClass($apt['status']) ?>"><?= htmlspecialchars($apt['status']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>