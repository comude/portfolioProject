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

        <div class="col-md-8" style="overflow:scroll;">

            <div id="title_container">
                Projects
            </div>

<!--          1. 여기 db에서 project들의 목록을 받아와서 뿌려주는 과정필요-->
<!--          2. '새로운 글쓰기' 버튼-->

            <form action="report_thumb_write.php">
                <input type="submit" value="write" >
            </form>

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