<?php
include('koneksi.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve data for the specified ID
    $query = "SELECT * FROM reservations WHERE id = $id";
    $result = $conn->query($query);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $email = $row['email'];
        $phone = $row['phone'];
        $tanggal = $row['tanggal'];
        $jam = $row['jam'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

// Handle form submission for update
if(isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    // Update data in the reservations table
    $updateQuery = "UPDATE reservations SET 
                    nama = '$nama', 
                    email = '$email', 
                    phone = '$phone', 
                    tanggal = '$tanggal', 
                    jam = '$jam' 
                    WHERE id = $id";

    if($conn->query($updateQuery) === TRUE) {
        header("Location: edit_reservation.php"); // Redirect back to the reservation page
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CAFE - Edit Reservation Form</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100vh;
            width: 100%;
            background: linear-gradient(to right, #D9BCB8 70%, #CA9E93 30%);
            position: relative;
            overflow: hidden;
        }

        nav {
            width: 90%;
            margin: auto;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav img {
            max-width: 60%;
            height: auto;
            max-height: 80px;
        }

        nav ul {
            display: flex;
            list-style-type: none;
        }

        nav ul li {
            margin: 0 5px;
        }

        nav ul a {
            text-decoration: none;
            padding: 0.3rem 1.3rem;
            font-size: 17px;
            font-weight: bold;
            color: #926c3a;
            position: relative;
            z-index: 1;
        }

        nav ul a::after {
            content: "";
            width: 0%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0px;
            border-radius: 20px;
            background-color: #CA9E93;
            z-index: -1;
            transition: 0.5s;
        }

        nav ul a:hover:after {
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 50px; /* Added margin-top to center the form */
        }

        form {
            width: 50%;
            margin: auto; /* Center the form */
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333; /* Match the text color */
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button {
            grid-column: span 2;
            padding: 12px;
            background-color: #926c3a;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #74562e;
        }

    </style>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="edit_reservation.php">Data Reservasi</a></li>
            </ul>
            <img src="logo1.png" alt="">
        </nav>
        <h2>Edit Reservation</h2>
        <br>
        <form action="edit_reservation_form.php?id=<?php echo $id; ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $nama; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>

            <label for="phone">Nomor Handphone:</label>
            <input type="tel" name="phone" value="<?php echo $phone; ?>" required>

            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" value="<?php echo $tanggal; ?>" required>

            <label for="jam">Jam :</label>
            <input type="time" name="jam" value="<?php echo $jam; ?>" required>

            <button type="submit" name="update">Update Reservation</button>
        </form>
    </div>
</body>

</html>
