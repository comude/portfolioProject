<?php
//    <include vs require>
//    include("/Applications/mampstack-5.5.30-1/apache2/htdocs/portfolio/db_config.php"); : 얘는 절대경로로 지정해줘야 되서 불편..
    require("../db_config.php");




//    echo "이미지 소스: "."{$_POST['img_src']}"."<br>";
//    echo "user_name: "."{$_POST['user_name']}";



//        넣을때 말고 불러올때 경로를 붙여주자!
//    $img_path = "/Applications/mampstack-5.5.30-1/apache2/htdocs/portfolio/img"."{$_POST['img_src']}";


    $sql = "INSERT INTO thumbnail(`proj_name`,`user_name`,`section`,`period`,`img_src`)
            VALUES('{$_POST['proj_name']}','{$_POST['user_name']}','{$_POST['section']}','{$_POST['period']}','{$_POST['img_src']}')";

     mysqli_query($conn,$sql);



header('Location:http://localhost:8080/portfolio/content/report_thumb_view.php')

//    $img_path = "{$_SERVER['DOCUMENT_ROOT']}"."/portfolio"."/img"."{$row['imr_src']}";
?>