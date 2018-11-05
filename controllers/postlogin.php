<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 10:15
 */
session_start();

if (empty($_SESSION)){
    header("location:login");
}
else{
    require 'views/postlogin.view.php';
}

