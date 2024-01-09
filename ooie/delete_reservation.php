<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete data for the specified ID
    $query = "DELETE FROM reservations WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        header("Location: edit_reservation.php"); // Redirect back to the edit_reservation.php page
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
