<?php
//    <include vs require>
//    include("/Applications/mampstack-5.5.30-1/apache2/htdocs/portfolio/db_config.php"); : 얘는 절대경로로 지정해줘야 되서 불편..
    require("../db_config.php");


    $sql = "INSERT INTO content(`date`,`title`,`description`)
            VALUES('{$_POST['date']}','{$_POST['title']}','{$_POST['description']}')";

     mysqli_query($conn,$sql);



header('Location:http://localhost:8080/portfolio/content/report_view.php');


?>