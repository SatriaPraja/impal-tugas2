<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $pet_name = $_POST['pet_name'];
    $owner_name = $_POST['owner_name'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    $sql = "UPDATE bookings SET pet_name = ?, owner_name = ?, check_in_date = ?, check_out_date = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pet_name, $owner_name, $check_in_date, $check_out_date, $id]);

    echo "Booking updated successfully.";
}
