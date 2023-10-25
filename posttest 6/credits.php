<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>credits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
<header class="header">
        <img src="logo.png" width="70px" height="auto" alt="paint">
        <a href="#" class="logo">DEMO Gallery Paint Ihsan</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#me">About Me</a>
            <a href="gallery.php">Gallery</a>
            <a href="credits.php">Credits</a>
            <a href="#kontak">Contact</a>
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
</body>
<script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-modedemo");
    }

    let jm2 = document.getElementById("jm2");
    let min2 = document.getElementById("min2");
    let dtk2 = document.getElementById("dtk2");

    setInterval(()=>{
        let currentTime = new Date();


        jm2.innerHTML = (currentTime.getHours()<10?"0":"") + currentTime.getHours();
        min2.innerHTML = (currentTime.getMinutes()<10?"0":"") + currentTime.getMinutes();
        dtk2.innerHTML = (currentTime.getSeconds()<10?"0":"") + currentTime.getSeconds();
    },1000)
</script>
</html>