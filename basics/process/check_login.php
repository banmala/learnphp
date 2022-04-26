<?php
    echo "<pre>";
    print_r($_POST);
    if($_POST){

    }else{
        ob_start();
        @header('location: ../login.php');
    }
?>