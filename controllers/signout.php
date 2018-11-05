<?php
session_start();
if (empty($_SESSION)){
    // if there is no session go to the login page
    header("location:login");
}
else{
    // destorys the session and then redirects to the login page
    session_destroy();
    header("location:login");
}