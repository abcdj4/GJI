<HTML>
    <HEAD>
      <TITLE>PHP 테스트</TITLE>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8" pageEncoding="UTF-8">

        <style type="text/css">
            .a_f_service, .a_f_field, .a_f_grade, .a_f_status, .a_f_type
            {
                width: 300px;
                float: left;
                margin: 10px;
            }

            body
            {
                width: 90%;
                margin: 0 auto;
            }


        </style>
    </HEAD>

    <BODY>
        <BR>
        <BR>
        <BR>

            
        <FORM action="ad_add_info_get.php" method="post">
            
            <!-- 서비스 입력창-->

            <DIV class="f_service">
            서비스: <input type="text" name="f_service" value="">
            </DIV>

            <!-- 서비스 입력창-->
            <DIV class="f_field">
            세부영역: <input type="text" name="f_field" value="">
            </DIV>

        

            <!--검색버튼-->		
            <div class="f_grade">
            등급:
            <select name="f_grade">
                    <option value="미정">미정</option>
                    <option value="1">1급</option>
                    <option value="2">2급</option>
                    <option value="3">3급</option>
                    <option value="4">4급</option>
                    <option value="5">5급</option>
            </select>
            </div>
            
            
            <DIV class="f_type">
            분류:             
            <select name="f_type">
                    <option value="접속장애">접속장애</option>
                    <option value="기능실행오류">기능실행오류</option>
                    <option value="이미지오류">이미지오류</option>
                    <option value="검색결과오류">검색결과오류</option>
                    <option value="기타">기타</option>
            </select>
            </DIV>
            <br>
            
            
            <p>
           
                장애현상:
                <textarea rows="5" cols="30" name="f_status"></textarea>
          
            </p>

            
                <input type="submit" value="확인">

                <button type="button" onclick="location.href='../Main.html' ">메인페이지</button>


            
            

    </FORM>
           
    </BODY>
    </HTML>
    
    