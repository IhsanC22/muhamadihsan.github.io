<?php

$conn = mysqli_connect('localhost', 'root', '', 'komentar');

if (!$conn) {
    die("connection failed : ".mysqli_connect_error());
}