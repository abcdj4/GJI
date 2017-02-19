<?php
 
    if($type == 1)
    {
        if($f_service == NULL)
        {
            print '검색 조건이 충족되지 않았습니다.';
        }
        //-----------------------------3번째 구분선------------------------------------------
        else if ($f_type == NULL && $f_detail <> NULL)//1
        {        
             require ("db_access.php");

                try
                {
                    $sql = "SELECT * FROM 블로그 WHERE f_field LIKE :f_detail";
                    $stmh = $pdo->prepare($sql);
                    $stmh->bindValue(':f_detail',$f_detail,PDO::PARAM_STR);
                    $stmh->execute();
                    $count = $stmh->rowCount();
                    print "검색결과는".$count."건입니다.<BR>";
                }
                catch (PDOException $Exception) 
                {
                    print "오류:".$Exception->getMessage();
                } 

        }
        //-----------------------------2번째 구분선------------------------------------------
        else if ($f_type <> NULL && $f_detail <> NULL)//2
        {
            require ("db_access.php");
                try
                {
                    $sql = "SELECT * FROM 블로그 WHERE f_type = :f_type && f_field LIKE :f_detail";
                    $stmh = $pdo->prepare($sql);
                    $stmh->bindValue(':f_detail',$f_detail,PDO::PARAM_STR);
                    $stmh->bindValue(':f_type',$f_type,PDO::PARAM_STR);
                    $stmh->execute();
                    $count = $stmh->rowCount();
                    print "검색결과는".$count."건입니다.<BR>";
                }
                catch (PDOException $Exception) 
                {
                    print "오류:".$Exception->getMessage();
                } 
        }
        //-----------------------------3번째 구분선------------------------------------------
        else if ($f_type == NULL && $f_detail == NULL)//3
        {
            require ("db_access.php");

            try
            {
                $sql = "SELECT * FROM 블로그";
                $stmh = $pdo->prepare($sql);
                $stmh->execute();
                $count = $stmh->rowCount();
                print "검색결과는".$count."건입니다.<BR>";
            }
                catch (PDOException $Exception) 
            {
                print "오류:".$Exception->getMessage();
            } 
        }
    //-----------------------------4번째 구분선------------------------------------------

        else if ($f_type <> NULL && $f_detail == NULL)//4
        {
           require ("db_access.php");

                try
                {
                    $sql = "SELECT * FROM 블로그 WHERE f_type = :f_type";
                    $stmh = $pdo->prepare($sql);
                    $stmh->bindValue(':f_type',$f_type,PDO::PARAM_STR);
                    $stmh->execute();
                    $count = $stmh->rowCount();
                    print "검색결과는".$count."건입니다.<BR>";
                }
                catch (PDOException $Exception) 
                {
                    print "오류:".$Exception->getMessage();
                } 
        }
        //-----------------------------5번째 구분선------------------------------------------
        else
        {
            print "검색한 조건에 대한 결과가 없습니다.";
        }
    }
    
    //-----------------------------추가용 구분선------------------------------------------
    
    else if($type == 2)
    {
        
                           //    .a_f_service, .a_f_field, .a_f_grade, .a_f_status, .a_f_type
        require ("db_access.php");

        try
        {
            $pdo->beginTransaction();
            $sql = "INSERT INTO 블로그 (f_field,grade,status,f_type) VALUES (:f_field,:f_grade,:f_status,:f_type)";
            $stmh = $pdo->prepare($sql);
            $stmh->bindvalue(':f_field',$f_field,PDO::PARAM_STR);
            $stmh->bindvalue(':f_grade',$f_grade,PDO::PARAM_STR);
            $stmh->bindvalue(':f_status',$f_status,PDO::PARAM_STR);
            $stmh->bindvalue(':f_type',$f_type,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
            print "데이터를 ".$stmh->rowCount()."건 입력하였습니다.<br>";
            
            $sql_All = "SELECT * FROM 블로그";
            $stm = $pdo->prepare($sql_All);
            $stm->execute();
            $count = $stm->rowCount();
            print "검색결과는".$count."건입니다.<BR>";
        } 
        catch (PDOException $Exception) 
        {
            $pdo->rollBack();       
            print "오류:".$Exception->getMessage();
        }
    }
    
    
    else if($type == 3)//삭제
    {
                           //    .a_f_service, .a_f_field, .a_f_grade, .a_f_status, .a_f_type
        require ("db_access.php");
              
        try
                { 
                    //<TD align="center"><a href=list.php?action=delete&id=<?=htmlspecialchars($row['id'])  >삭제</a></TD>
                  $pdo->beginTransaction();
                  $sql = "DELETE FROM 블로그 WHERE no = :no";
                  $stmh = $pdo->prepare($sql);
                  $stmh->bindValue(':no',$no,PDO::PARAM_INT);
                  $stmh->execute();
                  $pdo->commit();
                  print "데이터를".$stmh->rowCount()."건 삭제하였습니다.<br>";
                }
                catch(PDOException $Exception)
                {
                  $pdo->rollBack();
                  print "오류:".$Exception->getMessage();
                }
                try
        {
            $sql_All = "SELECT * FROM 블로그";
            $stm = $pdo->prepare($sql_All);
            $stm->execute();   
            $count = $stm->rowCount();
            print "검색 결과는".$count."건입니다.<BR>";
        }
        catch(PDOException $Exception)
        {
            print "오류:".$Exception->getMessage();
        }
        
        
        print '<br>';
        require 'ad_expression.php';
        print '<br>';
        
        
         
        
    }
    else if($type == 4)
    {
        require 'db_access.php';
        try{
                $pdo->beginTransaction();
                $sql = "UPDATE  블로그
                          SET
                            f_field  = :f_field,
                            grade = :grade,
                            status        = :status,
                            f_type        = :f_type
                          WHERE no = :no";
                $stmh = $pdo->prepare($sql);
                $stmh->bindValue(':f_field',$f_field,PDO::PARAM_STR);
                $stmh->bindValue(':grade',$grade,PDO::PARAM_STR);
                $stmh->bindValue(':status',$status,PDO::PARAM_STR);

                $stmh->bindValue(':f_type',$f_type,PDO::PARAM_STR);

                $stmh->bindValue(':no',$no,PDO::PARAM_INT);
                $stmh->execute();
                $pdo->commit();
                print "데이터를".$stmh->rowCount()."건 수정하였습니다.<br>";
              }catch(PDOException $Exception){
                $pdo->rollBack();
                print "오류:".$Exception->getMessage();
              }
              
              try
        {
            $sql_All = "SELECT * FROM 블로그";
            $stm = $pdo->prepare($sql_All);
            $stm->execute();   
            $count = $stm->rowCount();
            print "검색 결과는".$count."건입니다.<BR>";
        }
        catch(PDOException $Exception)
        {
            print "오류:".$Exception->getMessage();
        }
        
        
        print '<br>';
        require 'ad_expression.php';
        print '<br>';
              
              
              // 사용한 세션 변수를 삭제합니다.
              unset($_SESSION['id']);
            
    }    
    
    
    
    //-------관리자페이지 전체조회용-->
    else if($type == 5)
    {
        require ("db_access.php");
        
        try
        {
            $sql = "SELECT * FROM 블로그";
            $stm = $pdo->prepare($sql);
            $stm->execute();   
            $count = $stm->rowCount();
            print "검색 결과는".$count."건입니다.<BR>";
        }
        catch(PDOException $Exception)
        {
            print "오류:".$Exception->getMessage();
        }
        
        
        print '<br>';
        require 'ad_expression.php';
        print '<br>';
        
        
    }
  
    else if($type == 6)
    {
        require ("db_access.php");
        
        try
        {
            $sql = "SELECT * FROM 블로그 WHERE no = :no ";
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue(':no',$no,PDO::PARAM_INT);
            $stmh->execute();
            $count = $stmh->rowCount();
        }
        catch(PDOException $Exception)
        {
            print "오류:".$Exception->getMessage();
        }
        
        require 'ad_update_expression.php';
        
        
    }
    
    else 
    {
            print "좆댐...";
    }
    
?>