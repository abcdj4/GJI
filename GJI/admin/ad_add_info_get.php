<HTML>
    <HEAD>
        <TITLE>아우씨팔!!!!!!!!!!!!!!</TITLE>
    </HEAD>
    <BODY>
        
        <button type="button" onclick="location.href='ad_main.php'">관리자메인페이지</button>
        <?php
            
            $type=2;

            $f_service = $_POST['f_service'];
            
            $f_field = $_POST['f_field'];
            
            $f_grade = $_POST['f_grade'];
            
            $f_type = $_POST['f_type'];
            
            $f_status = $_POST['f_status'];
                  
            //검색한 서비스의 쿼리문 돌린 파일 불러오기
          
            print "<BR>";
            print "<BR>";
            
            require ('../db_all/'.$f_service.'.php');
            require ("ad_expression.php");
            
                   //    .a_f_service, .a_f_field, .a_f_grade, .a_f_status, .a_f_type
//
            
?>
</BODY>
</HTML>



