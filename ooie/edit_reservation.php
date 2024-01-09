<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CAFE - Edit Reservation</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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

        .main-content {
            width: 60%;
            padding-top: 100px;
            margin-left: 3rem;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .image-ooie,
        .main-text {
            flex-basis: 50%;
        }

        .image-ooie img {
            width: 100%;
        }

        .main-content h1 {
            font-size: 60px;
            letter-spacing: 1px;
            color: #494234;
        }

        .main-content p {
            margin-top: 10px;
            font-size: 15px;
            letter-spacing: 1px;
        }

        .main-content button {
            margin-top: 2.5rem;
            outline: none;
            border: none;
            font-size: 18px;
            padding: 0.5rem 2.5rem 0.5rem 1rem;
            border-radius: 0 50% 50% 0;
            background-color: #494234;
            color: white;
            cursor: pointer;
        }

        .swiper {
            width: 20rem;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right {
            position: absolute;
            left: 70%;
            top: 25%;
        }

        .box {
            display: flex;
            align-items: center;
        }

        .right .box .image img {
            width: 90%;
        }

        .image {
            margin-top: 2rem;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            box-shadow: -5px 5px 17px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.5s;
        }

        .image:hover {
            background-color: rgba(73, 66, 52, 0.7);
        }

        .box .inner-box {
            margin: 1.5rem 0 0 1rem;
        }

        .box .inner-box p {
            font-size: 10px;
            font-weight: 500;
        }

        .reservation-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #926c3a;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .reservation-button:hover {
            background-color: #7a5931;
        }

        .reservation-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .reservation-table th,
        .reservation-table td {
            border: 1px solid #926c3a;
            padding: 12px;
            text-align: left;
        }

        .reservation-table th {
            background-color: #926c3a;
            color: white;
        }

        .btn-edit,
        .btn-delete {
            padding: 10px 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .btn-edit {
            background-color: #4caf50;
        }

        .btn-delete {
            background-color: #f44336;
        }

        .social-links {
            position: absolute;
            right: 5%;
            bottom: 5%;
        }

        .social-links::before {
            content: "";
            width: 80%;
            height: 3px;
            position: absolute;
            top: 42%;
            left: -150px;
            background-color: #494234;
        }

        .social-links i {
            margin-left: 10px;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #D9BCB8;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.5s;
        }

        .social-links i:hover {
            transform: translateY(-5px);
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

        <div class="main-content">
            <table class="reservation-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Handphone</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('koneksi.php');

                    $query = "SELECT * FROM reservations";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$row['tanggal']}</td>
                                    <td>{$row['jam']}</td>
                                    <td>
                                        <button class='btn-edit' onclick='editReservation({$row['id']})'>Edit</button>
                                        <button class='btn-delete' onclick='deleteReservation({$row['id']})'>Delete</button>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data reservasi</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        function editReservation(id) {
            // Redirect to edit_reservation.php with the specific reservation ID
            window.location.href = 'edit_reservation_form.php?id=' + id;
        }

        function deleteReservation(id) {
            // Redirect to delete_reservation.php with the specific reservation ID
            window.location.href = 'delete_reservation.php?id=' + id;
        }
    </script>
</body>

</html>
