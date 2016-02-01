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



            <form class="pure-form pure-form-aligned" action="report_view_write_process.php" method="POST">

                <div class="panel-default" style="border: 1px solid green;">
                    <fieldset>
                        <div class="pure-control-group" style="margin-bottom: 10px;" >
                            <label style="width:100px; ">Date :</label>
                            <input name="date" class="text_bar" type="text" placeholder="date">
                        </div>

                        <div class="pure-control-group" style="margin-bottom: 10px;">
                            <label style="width:100px;">Title :</label>
                            <input name="title" class="text_bar" type="text" placeholder="title">
                        </div>

                        <div class="pure-control-group" style="margin-bottom: 10px;">
                            <label style="width:100px;">Description :</label>

                            <!--description 항목으로 ckeditor를 썼다-->

                            <textarea name="description" id="report_editor"></textarea>
                            <script>
                                CKEDITOR.replace( 'description' );
                            </script>

                        </div>

                        <input type="hidden" name="proj_name" value="<?php echo $_GET['proj_name']; ?>">


                        <div class="pure-controls" style="margin-top:5px; margin-left: 650px; ">
                            <button type="submit" class="pure-button pure-button-primary">
                                Submit
                            </button>
                        </div>
                    </fieldset>
                </div>
            </form>









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