<?php
    $conn = mysqli_connect("localhost","root","111111");
//    if (!$conn) {
//        die('Could not connect: ' . mysqli_error());
//        mysqli_close($conn);
//    }
//    echo 'Connected successfully   ';


    mysqli_select_db($conn,'portfolio');
?>