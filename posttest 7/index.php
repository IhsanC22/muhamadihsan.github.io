<?php
    date_default_timezone_set('Asia/Jakarta');
    include 'db.inc.php';
    include 'komen.inc.php';
    include 'session.php';

    if(isset($_POST['commentsubmit'])) {
        setkomen($conn);
    }
    if (isset($_SESSION['username'])) { // ini untuk Akses 'username' yang sudah ku atur di LOGINcobacobadoangbukanyangreal.php
        $username = $_SESSION['username'];
    } else { //ini untuk nama user kalo ga sesuai atau ga ada ya gaes
        $username = '';
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
            <?php
            if (isset($_SESSION['id_user'])) {
                echo '<a href="#" id="logout">Logout</a>';
            } else {
                echo '<a href="login.php">Login</a>';
            }
            ?>
            &nbsp; 
            &nbsp;
            &nbsp;
            &nbsp;
            <button onclick="darkMode()" class="darkbtn">Darkmode</button> 
        </nav>
        <div class="headerclock">
                <span id="jm2">00</span>
                <span>:</span>
                <span id="min2">00</span>
                <span>:</span>
                <span id="dtk2">00</span>
        </div>
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
    <br>
    <div><center><h3 class="greting-user"><?php echo $username; ?></h3></center></div>
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
    <div class="container2">
        <div class="clock" id="borderimg">
            <span id="jm">00</span>
            <span>:</span>
            <span id="min">00</span>
            <span>:</span>
            <span id="dtk">00</span>
        </div>
        <br>
        <div class="tanggal">
            <span id="th">thn</span>
            <span>:</span>
            <span id="bl">bln</span>
            <span>:</span>
            <span id="hr">hri</span>
        </div>
    </div>
    <br>
    <br>
    <br><br><br><br><br>
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
    <br id="cmt">
    <?php
     if (isset($_SESSION['id_user'])) {
        echo "<form method='POST' action=''>
    <input type='hidden' name='uid' value='".$_SESSION['id_user']."'>
    <input type='hidden' name='tanggal' value='".date('Y-m-d H:i:s')."'>
    <textarea name='pesan'></textarea><br>
    <button type='submit' name='commentsubmit'>Comment</button>
    </form>";
    } else {
        echo "<div class='warning'>HARUS LOGIN UNTUK KOMEN</div>
        <br><br>";
    }
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

    let jm = document.getElementById("jm");
    let min = document.getElementById("min");
    let dtk = document.getElementById("dtk");
    let th = document.getElementById("th");
    let bl = document.getElementById("bl");
    let hr = document.getElementById("hr");

    setInterval(()=>{
        let currentTime = new Date();

        jm.innerHTML = (currentTime.getHours()<10?"0":"") + currentTime.getHours();
        min.innerHTML = (currentTime.getMinutes()<10?"0":"") + currentTime.getMinutes();
        dtk.innerHTML = (currentTime.getSeconds()<10?"0":"") + currentTime.getSeconds();
        jm2.innerHTML = (currentTime.getHours()<10?"0":"") + currentTime.getHours();
        min2.innerHTML = (currentTime.getMinutes()<10?"0":"") + currentTime.getMinutes();
        dtk2.innerHTML = (currentTime.getSeconds()<10?"0":"") + currentTime.getSeconds();
        th.innerHTML = currentTime.getFullYear();
        bl.innerHTML = ((currentTime.getMonth() + 1)<10?"0":"") + (currentTime.getMonth() + 1);
        hr.innerHTML = (currentTime.getDate()<10?"0":"") + currentTime.getDate();
    },1000)

    document.getElementById("logout").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior
        window.location.href = "logout.php"; // Redirect to the logout PHP script
    });
</script>
   
</html>