<!DOCTYPE html>
<html>
<head>
    <!--.html 파일을 가져오는건 불가능해서 php끼리 include를 사용해야 한다. -->
    <?php include "../head_config.php"; ?>

    <!--kb style.css-->
    <link href="../kbstyle.css" rel="stylesheet">

    <!--부트스트랩 경로-->
    <link href="../bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-------------------------------- header -------------------------------->
<header>
    <?php include "../header.php" ?>
</header>

<!-------------------------------- low_body -------------------------------->

<div class="row">

    <div class="col-md-offset-2 col-md-8 " id="low_body">

        <!--left_nav-->
        <?php include "../left_nav.php"; ?>

            <!--contents-->

            <div class="col-md-8" id="content" style="overflow:scroll;">

                <div id="step">
                    step1. Layout
                </div>


                    <div class="row">

                        <?php

                        // refactoring할 방법을 찾아보자ㅠㅠㅠㅠㅠㅠ
                        // 지금은 thumbnail을 이라고 table_name을 직접 코드상으로 주는 방법밖에 떠오르지 않는다....


                        // paging
                        $table_name = 'content';
                        $proj_name = $_GET['proj_name'];



                        require("paging.php");


                        while($row = mysqli_fetch_assoc($result)){ ?>

                                <div style="width:200px; margin-left: 50px; margin-top: 20px; margin-bottom:0px;">

                                </div>


                                <!--panel-->
                                <div id="panel">
                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <?php echo $row['title']; ?>
                                        </div>

                                        <div class="panel-body">
                                            <?php echo $row['description']; ?>
                                        </div>


                                    </div>
                                </div>

                        <?php  }?>

                    </div>

                <nav style="margin-left: 600px;">
                    <form action="report_view_write.php?proj_name=<?php echo $_GET['proj_name']; ?>" style="float:left;" method="POST">
                        <input type="submit" value="write">
                    </form>

                    <form action="report_view_modify.php">
                        <input type="submit" value="modify">
                    </form>
                </nav>


                <!--pagination-->
                <div class="paging">
                    <!--$paging변수 안에 li에 대한 내용이 모두 들어있어서 그냥 찍어내도 list 형태로 찍힌다!-->
                    <?php echo $paging ?>
                </div>


            </div>



<!-------------------------------- comment -------------------------------->
            <div class="col-md-2" id="comment">comment</div>







    </div>


</div>



<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
<script src="../bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>



</body>
</html>