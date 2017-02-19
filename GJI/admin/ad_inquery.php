
<?php
    require 'ad_main.php';
    print '<br>';
    print '<br>';
    print '<br>';
            
    $f_service = $_POST['f_service'];
           /*
            if(isset($_GET['action']) && $_GET['action'] == 'delete' && $_GET['id'] > 0)
            {
                $type =3; 
                require "$f_service.'php'";
            }
            
         // 수정처리
            if(isset($_POST['action']) && $_POST['action'] == 'update')
            {
              // 세션 변수에 따라 id를 받습니다.
              $id = $_SESSION['id'];
              $type =4;
            }   
          */
    $type = 5;
    
    require ('../db_all/'.$f_service.'.php');
 
?>    