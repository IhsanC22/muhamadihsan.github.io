<?php
    date_default_timezone_set('Asia/Jakarta');
    include 'db.inc.php';
    include 'komen.inc.php';

    if(isset($_POST['commentsubmit'])) {
        setkomen($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEmopaint</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <img src="logo.png" width="70px" height="auto" alt="paint">
        <a href="#" class="logo">DEMO Gallery Paint Ihsan</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#me">About Me</a>
            <a href="gallery.php">Gallery</a>
            <a href="credits.php">Credits</a>
            <a href="#kontak">Contact</a>
        </nav>
        <button onclick="darkMode()">Darkmode</button>
    </header>
    <div class="greting">
        <center class="glow">
        <img src="skull.gif" class="kiri pixel">
        <span>S</span>
        <span>E</span>
        <span>L</span>
        <span>A</span>
        <span>M</span>
        <span>A</span>
        <span>T</span>
        &nbsp; 
        &nbsp; 
        <span>D</span>
        <span>A</span>
        <span>T</span>
        <span>A</span>
        <span>N</span>
        <span>G</span>
        <img src="skull.gif" class="kanan pixel">
        </center>
    </div>
    <div class="centersub"> 
    <center class="wavy">
        <span style="--i:1">D</span>
        <span style="--i:2">I</span>
        &nbsp;
        <span style="--i:3">W</span>
        <span style="--i:4">E</span>
        <span style="--i:5">B</span>
        <span style="--i:6">S</span>
        <span style="--i:7">I</span>
        <span style="--i:8">T</span>
        <span style="--i:9">E</span>
        &nbsp;
        <span style="--i:10">S</span>
        <span style="--i:11">A</span>
        <span style="--i:12">Y</span>
        <span style="--i:13">A</span>
    </center> 
    </div>
    <h2>
    Halo nama saya Muhamad Ihsan dan dan saya memiliki hobi mengambar, di sini anda akan melihat beberapa gambaran saya dari yang terlama hingga terbaru
    <br>
    <br>
    <p><u><strong>KOMIK PERTAMA</strong></u></p>
    <p class="wavy">Ini adalah Komik pertama yang saya buat, untuk yang satu ini agak berantakan karena saya masih belum terbiasa mengambar secara digital. Jadi banyak garis yang 
        <span style="--i:14">b</span>
        <span style="--i:15">e</span>
        <span style="--i:16">r</span>
        <span style="--i:17">g</span>
        <span style="--i:18">e</span>
        <span style="--i:19">l</span>
        <span style="--i:20">o</span>
        <span style="--i:21">m</span>
        <span style="--i:22">b</span>
        <span style="--i:23">a</span>
        <span style="--i:24">n</span>
        <span style="--i:25">g</span>
         di dalamnya. Dalam mengambar secara digital saya baru familiar menggunakan ms paint saja dan saya sedang mencari kesempatan untuk mencoba software lainnya</p>
    <div class="container">
        <img src="komik aegyufgyaf.png" alt="komik1" class="blok image imagesized">
        <div class="middle">
            <div class="text">komik pertama</div>
        </div>
    </div>
    <br>
    <br>
    <p><u><strong>ADA ANIMASI JUGA</strong></u></p>
    <p>Selain komik, saya juga senang mencoba membuat animasi dari waktu ke waktu. software yang paling saya familiar dalam membuat animasi adalah Adobe flash</p>
    <video width="500px" height="300px" controls="controls" src="animasi.mp4" type="video/mp4"></video>
    <br>
    <br>
    <p><u><strong>KOMIK YANG SEKARANG</strong></u></p>
    <p>Seperti yang di katakan sebelumnya saya masih menggunakan ms paint untuk mengambar secara digital, namun meskipun begitu saya berusaha untuk meningkatkan kemampuan untuk 
        <span class="glow3">mengkombinasikan warna</span>
          agar lebih baik dari gambar sebelumnya yang terkesan <i>flat</i> dan juga backgroundnya jauh lebih detail.</p>
    <br>
    <div class="container">
        <img src="komik overdosis.png" alt="komik2" class="blok image imagesized2">
        <div class="middle">
            <div class="text">komik yang terbaru</div>
        </div>
    </div>
    <br>
    <br>
    </h2>
    <br>
    <div class="centerize"><img src="tentang saya.gif" alt="gif" id="me"></div>
    <h2>
        <p><u><strong>SIAPAKAH MUHAMAD IHSAN ?</strong></u></p>
        <br>
        <p><img src="me at the flatgrass.jpg" class="blok imagesized2"></p>
        <br>
        <p><b>Muhamad Ihsan</b> adalah Mahasiswa Universitas Mulawarman dengan PRODI <b>INFORMATIKA</b> dia masuk ke dalam kelas <b>C22</b> sekarang sedang menempuh semester 3 dia memiliki <b>NIM 2209106099</b></p>
        <br>
    </h2>
    <h2 id="kontak">
        <p><u><strong>KONTAK</strong></u></p>
        <p>whatsapp :            085332861979</p>
        <p>Email    :            ihsan20045@gmail.com</p>
    </h2>
    <br>
    <br>
    <br>
    <?php
    echo "<form method='POST' action=''>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='tanggal' value='".date('Y-m-d H:i:s')."'>
        <textarea name='pesan'></textarea><br>
        <button type='submit' name='commentsubmit'>Comment</button>
    </form>";
    getkomen($conn);
    ?>
    <br>
    <br>
    <footer>
        <p align="center" class="glow3">
        <font align="center" font color="white">
         @Copyright 2023 /// Muhamad ihsan
        </font>
        </footer>
</body>
<script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>
   
</html>