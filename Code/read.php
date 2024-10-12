<?php
require_once 'config.php';

$sql = "SELECT * FROM bookings";
$stmt = $pdo->query($sql);
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($bookings as $booking) {
    echo "ID: " . $booking['id'] . ", Pet: " . $booking['pet_name'] . ", Owner: " . $booking['owner_name'] . 
         ", Check-in: " . $booking['check_in_date'] . ", Check-out: " . $booking['check_out_date'] . "<br>";
}
