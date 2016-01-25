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



                        <div style="width:200px; margin-left: 50px; margin-top: 20px; margin-bottom:0px;">
                            1 / 25
                        </div>






                        <!--panel-->
                        <div id="panel">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    Panel title
                                </div>

                                <div class="panel-body">
                                    Panel content<br>
                                    Panel content<br>
                                    Panel content
                                </div>

                                <div class="panel-footer">
                                    Panel footer
                                </div>

                            </div>
                        </div>

                    </div>


            </div>

            <!--comment-->
            <div class="col-md-2" id="comment">comment</div>







    </div>


</div>



<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
<script src="../bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>



</body>
</html>