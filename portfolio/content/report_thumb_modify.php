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



            <!---------이 form은 수정에서 쓰면 좋겠네~ --------->
            <!--thumbnail-->
            <div id="thumb_container">
                <table>

                    <tr>
                        <td>

                            <a href="./report_view.php">
                                <input type="image" id="thumb_img" name="img_src" src="/img1.png" onClick="href='./report_view.php";")>
                            </a>

                        </td>

                        <td>




                            <form class="pure-form pure-form-aligned" action="report_thumb_write_process.php" method="POST">

                                <div class="panel-default" id="thumb_description">
                                    <fieldset>
                                        <div class="pure-control-group">
                                            <label style="width:130px;">Project name :</label>
                                            <input name="proj_name" class="text_bar" type="text" placeholder="project name">
                                        </div>

                                        <div class="pure-control-group">
                                            <label style="width:130px;">User name :</label>
                                            <input name="user_name" class="text_bar" type="text" placeholder="user name">
                                        </div>

                                        <div class="pure-control-group">
                                            <label style="width:130px;">Section :</label>
                                            <input name="section" class="text_bar" type="text" placeholder="section">
                                        </div>

                                        <div class="pure-control-group">
                                            <label style="width:130px;">Period :</label>
                                            <input name="period" class="text_bar" type="text" placeholder="period">
                                        </div>

                                        <div class="pure-controls" style="margin-top:5px; margin-left: 310px; ">
                                            <button type="submit" class="pure-button pure-button-primary">Submit</button>
                                        </div>

                                    </fieldset>
                                </div>
                            </form>

                        </td>
                    </tr>

                </table>

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