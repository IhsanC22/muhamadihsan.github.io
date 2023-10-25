<?php
ob_start();
function setkomen($conn) {
    if (isset($_POST['commentsubmit'])) {
       $uid = $_POST['uid'];
       $tanggal = $_POST['tanggal'];
       $pesan = $_POST['pesan'];

       $sql = "INSERT INTO komen (uid, tanggal, pesan) VALUES ('$uid', '$tanggal', '$pesan')";
       $result = $conn->query($sql);
       header("Location: index.php");
    }
}


function getkomen($conn) {
    $sql = "SELECT * FROM komen";
    $result = $conn->query($sql);
    while ( $row = $result->fetch_assoc()) {
        echo "<div class='comment-box'><p>";
            echo $row['uid']."<br>";
            echo $row['tanggal']."<br>";
            echo nl2br($row['pesan']);
        echo "</p>
            <form class='edit-form' method='POST' action='edit.komen.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <input type='hidden' name='uid' value='".$row['uid']."'>
                <input type='hidden' name='tanggal' value='".$row['tanggal']."'>
                <input type='hidden' name='pesan' value='".$row['pesan']."'>
                <button>Edit</button>
            </form>
            <form class='hapusl' method='POST' action='".hapus($conn)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='hapus'>Hapus</button>
            </form>
        </div>";
    }
   
    
}

function editkomen($conn) {
    if (isset($_POST['commentsubmit'])) {
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $tanggal = $_POST['tanggal'];
        $pesan = $_POST['pesan'];

        $sql = "UPDATE komen SET pesan='$pesan' WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: index.php");
    }
}

function hapus($conn) {
    if (isset($_POST['hapus'])) {
        $cid = $_POST['cid'];

       $sql = "DELETE FROM komen WHERE cid='$cid'";
       $result = $conn->query($sql);
       header("Location: index.php");
    }
}