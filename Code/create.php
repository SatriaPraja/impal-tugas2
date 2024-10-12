<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pet_name = $_POST['pet_name'];
    $owner_name = $_POST['owner_name'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    $sql = "INSERT INTO bookings (pet_name, owner_name, check_in_date, check_out_date) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pet_name, $owner_name, $check_in_date, $check_out_date]);

    echo "Booking created successfully.";
}
