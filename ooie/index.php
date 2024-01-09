<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CAFE</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="edit_reservation.php">Data Reservasi</a></li>
            </ul>
            <img src="logo1.png" alt="">
        </nav>

        <div class="main-content">
            <div class="image-ooie">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="gambar1.jpeg" alt=""></div>
                        <div class="swiper-slide"><img src="gambar2.jpeg" alt=""></div>
                        <div class="swiper-slide"><img src="gambar3.jpeg" alt=""></div>    
                    </div> 
                </div>
            </div>
            <div class="main-text">
                <h1>OOIE CAFE</h1>
                <p>Nikmati Me Time Dengan Nyaman </p>
                <button onclick="redirectToAbout()">Know More</button>
            </div>
        </div>

        <div class="right">
            <div class="box">
                <div class="image">
                    <img src="2.png" alt="">
                </div>
                <div class="inner-box">
                    <h3>Solitude</h3>
                    <p>Tanpa Memikirkan kebisingan sehari-hari diiringi dengan musik samar</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="1.png" alt="">
                </div>
                <div class="inner-box">
                    <h3>Nice View</h3>
                    <p>Pemandangan Dengan Aneka Bunga Yang Indah</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="3.png" alt="">
                </div>
                <div class="inner-box">
                    <h3>Introvert Place</h3>
                    <p>Banyak Buku Bacaan Untuk Menghabiskan Waktu Luang</p>
                </div>
            </div>
        </div>

        <div class="social-links">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="far fa-envelope"></i>
        </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
        });
    </script>
    <script>
        function redirectToAbout() {
            window.location.href = 'about.php'; // Redirect to the About page
        }
    </script>
</body>

</html>