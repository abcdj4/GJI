<?php

    try
            {
                require ("access_info.php");

                $pdo = new PDO($dsn, $db_user, $db_pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            } 
                catch (PDOException $Exception) 
            {
                die('오류:'.$Exception->getMessage());
            }
    return $pdo;
?>
