<?php
declare(strict_types=1);
namespace App\Controllers;
use App\Support\Response;

class AppointmentController {
    public function index(): void {
        $appointments = require dirname(__DIR__) . '/Data/appointments.php';
        Response::view('appointments/index', [
            'title' => 'Appointment List',
            'appointments' => $appointments,
            'created' => ($_GET['created'] ?? '') === '1'
        ]);
    }

    public function create(): void {
        Response::view('appointments/create', [
            'title' => 'Book Appointment',
            'error' => null
        ]);
    }

    public function store(): void {
        $name = trim($_POST['patient_name'] ?? '');
        $department = trim($_POST['department'] ?? '');
        
        if ($name === '' || $department === '') {
            Response::view('appointments/create', [
                'title' => 'Book Appointment',
                'error' => 'Please enter patient name and department correctly.'
            ], 422);
        }
        Response::redirect('/appointments?created=1');
    }
}