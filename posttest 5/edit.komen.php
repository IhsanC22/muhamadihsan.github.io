<?php
    date_default_timezone_set('Asia/Jakarta');
    include 'db.inc.php';
    include 'komen.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('void.gif');">

<center><img src="komenedit.png" alt=""></center>
<?php
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$tanggal = $_POST['tanggal'];
$pesan = $_POST['pesan'];

echo "<form method='POST' action='".editkomen($conn)."'>
    <input type='hidden' name='cid' value='".$cid."'>
    <input type='hidden' name='uid' value='".$uid."'>
    <input type='hidden' name='tanggal' value='".$tanggal."'>
    <textarea name='pesan'>".$pesan."</textarea><br>
    <button type='submit' name='commentsubmit'>Edit</button>
</form>";
?>
</body>
</html>