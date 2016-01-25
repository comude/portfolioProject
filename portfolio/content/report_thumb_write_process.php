<?php
    include("/Applications/mampstack-5.5.30-1/apache2/htdocs/portfolio/db_config.php");

    echo "이미지 소스: "."{$_POST['img_src']}"."<br>";
    echo "user_name: "."{$_POST['user_name']}";


//    $sql = "INSERT INTO thumbnail(`img_src`,`proj_name`,`user_name`,`section`,`period`) VALUES({},{},{},{}) ";


//    $img_path = "{$_SERVER['DOCUMENT_ROOT']}"."/portfolio"."/img"."{$row['imr_src']}";
?>