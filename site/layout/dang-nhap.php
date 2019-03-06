<?php
    if(isset($_SESSION['user'])){
        require 'dang-nhap-info.php';
    }
    else{
       
        require 'dang-nhap-form.php';
    }
