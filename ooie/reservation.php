<?php
include('koneksi.php');

$notification = '';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $sql = "INSERT INTO reservations (nama, email, phone, tanggal, jam) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nama, $email, $phone, $tanggal, $jam);

    
    if ($stmt->execute()) {
        $notification = "Reservasi Berhasil!";
    } else {
        $notification = "Error: " . $stmt->error;
    }

// Tutup prepared statement
$stmt->close();

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CAFE</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .reservation-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .reservation-table th, .reservation-table td {
            border: 1px solid #926c3a;
            padding: 10px;
            text-align: left;
        }

        .reservation-table th {
            background-color: #926c3a;
            color: white;
        }

        .reservation-form {
            margin-bottom: 20px;
        }

        .reservation-form form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .reservation-form form label {
            margin-bottom: 5px;
        }

        .reservation-form form button {
            grid-column: span 2;
        }

        .notification {
            display: none;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .notification.show {
            display: block;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .main-content ul li {
            font-size: 16px;
            color: #494234;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 600px) {
            .reservation-table th, .reservation-table td {
                font-size: 14px;
                padding: 8px;
            }

            .main-content ul li {
                font-size: 14px;
            }

            .reservation-form form {
                grid-template-columns: 1fr;
            }
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

        <!-- Konten About -->
        <div class="main-content">
            <!-- Formulir Reservasi -->
            <div class="reservation-form">
                <h1>Reservasi</h1>
                <p>Silahkan Isi Data</p>
                <div id="notification" class="notification"><?php echo $notification; ?></div> 
                </br>
                <form action="reservation.php" method="post">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" required>

                    <label for="phone">Nomor Handphone:</label>
                    <input type="tel" name="phone" required>

                    <label for="tanggal">Tanggal:</label>
                    <input type="date" name="tanggal" required>

                    <label for="jam">Jam :</label>
                    <input type="time" name="jam" required>

                    <button type="submit" name="submit">Submit Reservation</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>