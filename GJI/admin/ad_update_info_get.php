<?php

    session_start();

    $type = 4;
    $no = $_POST['no'];
    $f_field = $_POST['f_field'];
    $grade = $_POST['grade'];
    $status = $_POST['status'];
    $f_type = $_POST['f_type'];
    $f_service = $_POST['f_service'];
    
    require ('../db_all/'.$f_service.'.php');

    
    ?>