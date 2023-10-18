<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <header class="header">
        <img src="logo.png" width="70px" height="auto" alt="paint">
        <a href="#" class="logo">DEMO Gallery Paint Ihsan</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#">About Me</a>
            <a href="gallery.php">Gallery</a>
            <a href="credits.php">Credits</a>
            <a href="#">Contact</a>
        </nav>
        <button onclick="darkMode()">Darkmode</button>
    </header>
</body>
<script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-modedemo");
    }
</script>
</html>