<?php

if($count < 1){
    print "수정 데이터가 없습니다.<BR>";
  }else{
    $row = $stmh->fetch(PDO::FETCH_ASSOC);
    
    ?>
    
        <FORM name="" method="post" action="ad_update_info_get.php">
      번호：<INPUT type="text" name="no"
               value="<?=htmlspecialchars($row['no'])?>"<BR>
      
      세부영역：<INPUT type="text" name="f_field"
               value="<?=htmlspecialchars($row['f_field'])?>"><BR>
      
      
      
      장애등급：
            <select name="grade">
                    <option value="미정">미정</option>
                    <option value="1">1급</option>
                    <option value="2">2급</option>
                    <option value="3">3급</option>
                    <option value="4">4급</option>
                    <option value="5">5급</option>
            </select>
      장애현상：<INPUT type="text" name="status"
                value="<?=htmlspecialchars($row['status'])?>"><BR>
            
      
    
      
      
      장애유형：
            <select name="f_type" >
                <option value="">전체</option>
                <option value="접속장애">접속장애</option>
                <option value="기능실행오류">기능실행오류</option>
                <option value="이미지오류">이미지오류</option>
                <option value="검색결과오류">검색결과오류</option>
                <option value="기타">기타</option>
            </select>
       <!--<INPUT type="hidden" name="action" value="update">-->
        <INPUT type="hidden" name="type" value="4">
        <INPUT type="hidden" name="f_service" value="<?=$f_service?>">

      <INPUT type="submit" value="수정">
    </FORM>
    <?php
  }
?>
