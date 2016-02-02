<?php


        include("../db_config.php");

        /* 페이징 시작 */
        //페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }

        $sql = "select count(*) as cnt from {$table_name}";

            // content table은 해당 project name의 record만 가져와야 하므로 추가 조건을 준다
            if($table_name=='content'){
                $sql .= " where proj_name='{$_GET['proj_name']}'";
            }

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);


        // 가져올 값이 없을때는,
        if($row['cnt']==0) {
            $paging = '<ul id="page_ul">'; // 페이징을 저장할 변수
            $paging .= '<li class="page current">' . 1 . '</li>';
            $paging .= '</ul>';
        } else {


                    $allPost = $row['cnt']; //전체 게시글의 수

                    $onePage = 4; // 한 페이지에 보여줄 게시글의 수.
                    $allPage = ceil($allPost / $onePage); //전체 페이지의 수

                        if ($page < 1 || $page > $allPage) { ?>
                            <script>
                                alert("존재하지 않는 페이지입니다.");
                                history.back();
                            </script>

            <?php
                        exit;

                    }

                    $oneSection = 3; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
                    $currentSection = ceil($page / $oneSection); //현재 섹션
                    $allSection = ceil($allPage / $oneSection); //전체 섹션의 수

                    $firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

                    if ($currentSection == $allSection) {
                        $lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
                    } else {
                        $lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
                    }

                    $prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
                    $nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.







                    $paging = '<ul id="page_ul">'; // 페이징을 저장할 변수

//                    //현재 url 구하기
//                    $url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

                    //첫 페이지가 아니라면 처음 버튼을 생성
                    if ($page != 1) {
                        if(!empty($_GET['proj_name'])) {
                            $paging .= '<li class="page page_start"><a href="?'.'proj_name='.$_GET['proj_name'].'&page=1">처음</a></li>';
                        }else {
                            $paging .= '<li class="page page_start"><a href="?page=1">처음</a></li>';
                        }
                    }
                    //첫 섹션이 아니라면 이전 버튼을 생성
                    if ($currentSection != 1) {
                        if(!empty($_GET['proj_name'])) {
                            $paging .= '<li class="page page_prev"><a href="?'.$_GET['proj_name'].'page=' . $prevPage . '">이전</a></li>';
                        }else {
                            $paging .= '<li class="page page_prev"><a href="?page=' . $prevPage . '">이전</a></li>';
                        }
                    }


                    for ($i = $firstPage; $i <= $lastPage; $i++) {

                        if ($i == $page) {
                            $paging .= '<li class="page current">' . $i . '</li>';
                        } else {
                            if(!empty($_GET['proj_name'])){
                                $paging .= '<li class="page"><a href="?'.'proj_name='.$_GET['proj_name'].'&page=' . $i . '">' . $i . '</a></li>';
                            }else {
                                $paging .= '<li class="page"><a href="?page=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                    }

                    //마지막 섹션이 아니라면 다음 버튼을 생성
                    if ($currentSection != $allSection) {
                        if(!empty($_GET['proj_name'])){
                            $paging .= '<li class="page page_next"><a href="?'.'proj_name='.$_GET['proj_name'].'&page=' . $nextPage . '">다음</a></li>';
                        }else {
                            $paging .= '<li class="page page_next"><a href="?page=' . $nextPage . '">다음</a></li>';
                        }
                    }

                    //마지막 페이지가 아니라면 끝 버튼을 생성
                    if ($page != $allPage) {

                        if(!empty($_GET['proj_name'])) {
                            $paging .= '<li class="page page_end"><a href="?' . 'proj_name=' . $_GET['proj_name'] . '&page=' . $allPage . '">끝</a></li>';
                        }else {
                            $paging .= '<li class="page page_end"><a href="?page=' . $allPage . '">끝</a></li>';
                        }
                    }
                    $paging .= '</ul>';





                    /* 페이징 끝 */
                    $currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
                    $sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문



        }// end of else

        $sql = "select * from {$table_name}";

        // content table은 해당 project name의 record만 가져와야 하므로 추가 조건을 준다
        if($table_name=='content'){
            $sql .= " where proj_name='{$_GET['proj_name']}'";
//            $sqlLimit = "";
        }

        $sql .= $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지







        $result = mysqli_query($conn, $sql);

?>




