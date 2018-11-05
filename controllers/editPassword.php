<?php

if ($_POST["password"] == $_POST["Rpassword"]){
    $app['database']->editPassword($_POST["id"], $_POST["password"]);
    header("location:editUser");
}else{
    header("location:error");
}