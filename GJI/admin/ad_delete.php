
<HTML>
<HEAD>
  <TITLE>PHP 테스트</TITLE>
</HEAD>
<BODY>
<HR size="1" noshade>
수정화면
<HR size="1" noshade>
[ <a href="ad_main.php">되돌아가기</a>]
<BR>

<?php
    $no = $_GET['no'];
    //$type = $_GET['type'];
    $f_service = $_GET['f_service'];
    $type = 3;
    require ('../db_all/'.$f_service.'.php');
    
  
?>


</BODY>
</HTML>