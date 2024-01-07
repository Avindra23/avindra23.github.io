<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Praktikum 10</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 20px;
                background-image: url(gbr1.jpg);
                background-size: cover;
            }

            h1 {
                color: #3498db;
            }

            p {
                color: #2ecc71;
                font-size: 18px;
            }
            .content{
                margin: 50px;
                padding: 180px;
                margin-left: 80px;
            }
        </style>
    </head>
    <body>
        <div class="content">
    
        <?php
            // Mendapatkan waktu sekarang
            date_default_timezone_set('Asia/Jakarta');
            $waktu_sekarang = date('Y-m-d H:i:s');

            // Membuat string menarik
            $pesan = "Selamat Datang !!!";
            $tanggal = "Hari ini tanggal " . date('d F Y');
            $waktu = "Sekarang pukul " . date('H:i:s');

            // Menampilkan string menarik
            echo "<h1>$pesan</h1>";
            echo "<p>$tanggal</p>";
            echo "<p>$waktu</p>";
        ?>
        </div>
    </body>
</html>