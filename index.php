<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit;
}

include 'koneksi.php';

$query = mysqli_query($koneksi,"SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="destinasi.html">Destinasi</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="Gambar/MALIOBORO.jpg">
                <div class="content">
                    <div class="kota">YOGYAKARTA</div>
                    <div class="title">WISATA</div>
                    <div class="tempat">MALIOBORO</div>
                    <div class="des">
                        Malioboro adalah salah satu jalan paling terkenal di Yogyakarta, sering disebut sebagai jantung kota. Jalan ini dikenal sebagai pusat perbelanjaan dan wisata, dengan deretan toko, kios, dan pedagang kaki lima yang menjual berbagai barang mulai dari pakaian, kerajinan tangan, hingga makanan khas. Malioboro juga merupakan tempat yang kaya akan budaya dan sejarah, sering menjadi lokasi berbagai pertunjukan seni dan budaya, termasuk pertunjukan musik tradisional dan seni rupa. Di sepanjang jalan, Anda juga dapat menemukan bangunan-bangunan bersejarah seperti Benteng Vredeburg dan Pasar Beringharjo, pasar tradisional yang menawarkan berbagai produk lokal.
                    </div>
                    <div class="buttons">
                        <button><a href="malioboro.html">KUNJUNGI</a></button>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/peramba.jpg">
                <div class="content">
                    <div class="kota">YOGYAKARTA</div>
                    <div class="title">WISATA</div>
                    <div class="tempat">CANDI PRAMBANAN</div>
                    <div class="des">
                        Candi Prambanan adalah kompleks candi Hindu terbesar di Indonesia yang terletak di sebelah timur Yogyakarta.
                    </div>
                    <div class="buttons">
                        <button><a href="prambanan.html">KUNJUNGI</a></button>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/parangkritis.jpg">
                <div class="content">
                    <div class="kota">YOGYAKARTA</div>
                    <div class="title">WISATA</div>
                    <div class="tempat">PANTAI PARANGTRITIS</div>
                    <div class="des">
                        Pantai Parangtritis adalah pantai paling terkenal di Yogyakarta yang menawarkan pemandangan indah dan kegiatan wisata yang beragam.
                    </div>
                    <div class="buttons">
                        <button><a href="parangtritis.html">KUNJUNGI</a></button>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/heha.jpg">
                <div class="content">
                    <div class="kota">YOGYAKARTA</div>
                    <div class="title">WISATA</div>
                    <div class="tempat">HEHA SKY VIEW</div>
                    <div class="des">
                        HeHa Sky View adalah destinasi wisata populer di Yogyakarta yang menawarkan pemandangan indah dari ketinggian. Terletak di perbukitan Gunungkidul, tempat ini memungkinkan pengunjung menikmati pemandangan alam yang spektakuler, terutama saat matahari terbenam.
                    </div>
                    <div class="buttons">
                        <button><a href="heha sky.html">KUNJUNGI</a></button>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/tugu jogja.jpg">
                <div class="content">
                    <div class="kota">YOGYAKARTA</div>
                    <div class="title">WISATA</div>
                    <div class="tempat">TUGU YOGYAKARTA</div>
                    <div class="des">
                        Tugu Jogja adalah monumen bersejarah yang menjadi salah satu ikon kota Yogyakarta. Monumen ini dibangun oleh Sultan Hamengkubuwono I pada tahun 1755 sebagai simbol persatuan antara rakyat dan penguasa. Tugu ini juga sering dijadikan titik awal dalam berbagai kegiatan budaya dan upacara. Terletak di persimpangan jalan utama, Tugu Jogja menjadi salah satu landmark penting yang sering dikunjungi oleh wisatawan.
                    </div>
                    <div class="buttons">
                        <button><a href="tugu.html">KUNJUNGI</a></button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail/gambar -->
        <div class="thumbnail">
            <div class="item">
                <img src="Gambar/MALIOBORO.jpg">
                <div class="content">
                    <div class="title">
                        Malioboro
                    </div>
                    <div class="deskripsi">
                        Yogyakarta
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/peramba.jpg">
                <div class="content">
                    <div class="title">
                        Perambanan
                    </div>
                    <div class="deskripsi">
                        Yogyakarta
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/parangkritis.jpg">
                <div class="content">
                    <div class="title">
                        Pantai Parangtritis
                    </div>
                    <div class="deskripsi">
                        Yogyakarta
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/heha.jpg">
                <div class="content">
                    <div class="title">
                        HeHa Sky View
                    </div>
                    <div class="deskripsi">
                        Yogyakarta
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Gambar/tugu jogja.jpg">
                <div class="content">
                    <div class="title">
                        Tugu Yogyakarta
                    </div>
                    <div class="deskripsi">
                        Yogyakarta
                    </div>
                </div>
            </div>
        </div>

        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- class dari waktu -->
        <div class="waktu"></div>
    </div>
        <!-- class About-->
        
    

    <script src="js/app.js"></script>
</body>
</html>
