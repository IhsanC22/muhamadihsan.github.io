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
        $id_user = $row['uid'];
        $sql2 = "SELECT * FROM user WHERE id_user='$id_user'";
        $result2 = $conn->query($sql2);
        if ($row2 = $result2->fetch_assoc()) {
              echo "<div class='comment-box'><p>";
            echo $row2['uid']."<br>";
            echo $row['tanggal']."<br>";
            echo nl2br($row['pesan']);
            echo "</p>";
               echo "<form class='edit-form' method='POST' action='edit.komen.php'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <input type='hidden' name='uid' value='".$row['uid']."'>
                    <input type='hidden' name='tanggal' value='".$row['tanggal']."'>
                    <input type='hidden' name='pesan' value='".$row['pesan']."'>
                    <button>Edit</button>
                </form>
                <form class='hapusl' method='POST' action='".hapus($conn)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='hapus'>Hapus</button>
                </form>";
           echo "</div>";
        }
      
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

function getlogin($conn) {
    if (isset($_POST['loginsubmit'])) {
        $uid = $_POST['uid'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE nama='$uid' AND password='$password'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            if ( $row = $result->fetch_assoc()) {
                $_SESSION['id_user'] = $row['id_user'];
                header("location: index.php?loginsuccess");
                exit();
            }
        } else {
            header("location: index.php?loginfailed");
            exit();
        }
    }
}

