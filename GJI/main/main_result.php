<HTML>
    <HEAD>
        <TITLE>아우씨팔!!!!!!!!!!!!!!</TITLE>
    </HEAD>
    <BODY>
        <br>
        <?php
        
            //서비스, 세부영역, 장애현상 가져옴
            $f_service = $_POST['f_service'];
            $f_detail = '%'.$_POST['f_detail']."%";
            $f_type = $_POST['f_type'];
            $type =1;
            //검색한 서비스의 쿼리문 돌린 파일 불러오기
            require 'Main.html';
            print "<BR>";
            print "<BR>";
           
            
        ?>
        
        <div align="center">
        <?php    
            require ('../db_all/'.$f_service.'.php');
            require ("main_expression.php"); 
        ?>
        </div>
           
          

</BODY>
</HTML>



